<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_tiket extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_cetak');
        $this->load->library('pdf');
        //cek_session();
    }
    
    public function index()
    {
        //$data["record"] = $this->model_cetak->cetak_tiket();
        $data["judul"] = "Travelakku Dulu";
        $this->load->view('header',$data);
        $this->load->view('cetak_tiket',$data);
    }

    // function cari()
    // {
    	
    // 	$this->model_cetak->cari($no_tagihan);
        
    // }

    function tampil_cetak()
    {
    	$no_tagihan = $this->input->post("no_tagihan");
        $record = $this->model_cetak->cari_tiket($no_tagihan);
        echo '<div class="col s12 m12">
                <div id="tutup" class="card-panel white animated fadeIn">';
        if($record->num_rows()>0){
            echo '<table>
            <thead>
              <tr>
                  <th>No Tiket</th>
                  <th>Nama</th>
                  <th>No Travel</th>
                  <th>Rute</th>
                  <th>Tanggal Keberangkatan</th>
                  <th>Harga Tiket</th>
                  <th>Cetak</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($record->result() as $r){
                 echo '<tr id ="baris'.$r->no_tiket.'">
                            <td>'.$r->no_tiket.'</td>
                            <td>'.$r->nama.'</td>
                            <td>'.$r->no_travel.'</td>
                            <td>'.$r->asal.' - '.$r->tujuan.'</td>
                            <td>'.$r->tgl_berangkat.'</td>
                            <td>'.$r->harga.'</td>
                            <td>'.anchor(base_url().'cetak_tiket/pdf/'.$r->no_tiket,'<h6>Cetak Sekarang</h6>',array('class'=>'cetak waves-effect waves-light btn','target'=>'_blank','data-id'=>$r->no_tiket)).'</td>
                       </tr>';
            }
            echo '</tbody>
              </table>';
        }else{
            echo '<p>Tike Sudah Dicetak Atau Nomor Tagihan Anda Tidak Terdaftar</p>';
        }
        echo '</div></div>';
    }
    
    public function pdf(){
        global $title;
        $tiket = $this->uri->segment(3);
        //$id = $this->uri->segment(3);
        //$nama = $this->uri->segment(4);
        $pdf = new PDF('L','mm','A5');
        $title = 'TRAVELLAKU' ;
        $pdf->SetTitle($title );
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        //$pdf->SetY($Y_Fields_Name_position);
        //$pdf->Ln(9);
//        $pdf->SetXY(26,33);
//        $pdf->Cell(10,8,'No Boking :',0,0,'C');
//        $pdf->Cell(15,8,$tagihan,0,0,'C');
//        $pdf->SetXY(22,38);
//        $pdf->Cell(10,8,'Nama :',0,0,'C');
//        $pdf->Cell(15,8,'',0,0,'C');
//        $pdf->Ln(15);
//        $pdf->SetX(25);
//        $pdf->Cell(10,8,'NO.',1,0,'C');
//        $pdf->Cell(17,8,'No Tiket',1,0,'C');
//        $pdf->Cell(20,8,'No Travel',1,0,'C');
//        $pdf->Cell(45,8,'Asal',1,0,'C');
//        $pdf->Cell(45,8,'Tujuan',1,1,'C');
        $no = 1;
//        $total = 0;
//        $pdf->SetFont('Arial','',10);
        foreach ($this->model_cetak->cetak_tiket($tiket)->result() as $r){
            $pdf->SetXY(32,33);
            $pdf->Cell(10,8,'Nama        : ',0,0,'C');
            $pdf->Cell(40,8,$r->nama,0,0,'C');
            $pdf->SetXY(32,41);
            $pdf->Cell(10,8,'No Tiket    : ',0,0,'C');
            $pdf->Cell(40,8,$tiket,0,0,'C');
            $pdf->SetXY(32,49);
            $pdf->Cell(10,8,'Tujuan      : ',0,0,'C');
            $pdf->Cell(100,8,$r->asal.' - '.$r->tujuan,0,0,'C');
            $pdf->SetXY(44,57);
            $pdf->Cell(10,8,'Tanggal Berangkat : ',0,0,'C');
            $pdf->Cell(73,8,$r->tgl_berangkat,0,0,'C');
            $pdf->SetXY(44,65);
            $pdf->Cell(10,8,'Berangkat Pukul     : ',0,0,'C');
            $pdf->Cell(66,8,$r->jam_berangkat,0,0,'C');
            $pdf->SetXY(34,73);
            $pdf->Cell(10,8,'No Travel     : ',0,0,'C');
            $pdf->Cell(66,8,$r->no_travel,0,0,'C');
            $pdf->SetXY(36,81);
            $pdf->SetXY(36,89);
//            $pdf->Cell(10,8,'Total Bayar     : ',0,0,'C');
//            $pdf->Cell(66,8,'Rp.'.$no*$r->harga,0,0,'C');
            $pdf->SetFont('Arial','',10);
            $no++;
        }
//        //$pdf->Line(205, 44+$no*8, 5, 44+$no*8);
//        $pdf->SetFont('Arial','B',20);
//        $pdf->SetXY(20,51+$no*8);
//        $pdf->Cell(125,8,'Total Bayar',0,0);
//        $pdf->Cell(45,8,'Rp.'.$total,0,1);
//        $pdf->Ln();
        $pdf->Output();
    }
    
    function update(){
        $id = $this->input->post("id");
        $this->model_cetak->update($id);
    }
}
