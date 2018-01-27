<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
    
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('model_pesan');
        $this->load->library('pdf');
        //cek_session();
    }
    
    public function index()
    {   
    }
    
    public function post()
    {
        $tagihan = $this->model_pesan->pesan();
        //die(print_r($tagihan)); 
        $this->session->set_userdata(array('notagihan'=>$tagihan));
        redirect('pesan/pdf');
    }
    
    public function pdf(){
        global $title;
        $tagihan= $this->session->userdata('notagihan');
        //$id = $this->uri->segment(3);
        //$nama = $this->uri->segment(4);
        $pdf = new PDF('L','mm','A5');
        $title = 'TRAVELLAKU' ;
        $pdf->SetTitle($title );
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        //$pdf->SetY($Y_Fields_Name_position);
        //$pdf->Ln(9);
//        $pdf->SetXY(26,33);
//        $pdf->Cell(10,8,'No Boking :',0,0,'C');
//        $pdf->Cell(15,8,$tagihan,0,0,'C');
//        $pdf->SetXY(22,38);
//        $pdf->Cell(10,8,'Nama :',0,0,'C');
//        $pdf->Cell(15,8,'',0,0,'C');
        $pdf->Ln(15);
//        $pdf->SetX(25);
//        $pdf->Cell(10,8,'NO.',1,0,'C');
//        $pdf->Cell(17,8,'No Tiket',1,0,'C');
//        $pdf->Cell(20,8,'No Travel',1,0,'C');
//        $pdf->Cell(45,8,'Asal',1,0,'C');
//        $pdf->Cell(45,8,'Tujuan',1,1,'C');
        $no = 1;
//        $total = 0;
        $pdf->SetFont('Arial','',16);
        foreach ($this->model_pesan->tampil_pemesan($tagihan)->result() as $r){
            $no++;
        }
        $pdf->SetXY(32,33);
        $pdf->Cell(10,8,'No Tagihan        : ',0,0,'C');
        $pdf->Cell(40,8,$tagihan,0,0,'C');
        $pdf->SetXY(30,41);
        $pdf->Cell(10,8,'Nama              : ',0,0,'C');
        $pdf->Cell(40,8,$r->nama,0,0,'C');
        $pdf->SetXY(20,49);
        $pdf->Cell(10,8,'Tujuan : ',0,0,'C');
        $pdf->Cell(80,8,$r->asal.' - '.$r->tujuan,0,0,'C');
        $pdf->SetXY(35,57);
        $pdf->Cell(10,8,'Tanggal Berangkat : ',0,0,'C');
        $pdf->Cell(71,8,$r->tgl_berangkat,0,0,'C');
        $pdf->SetXY(36,65);
        $pdf->Cell(10,8,'Berangkat Pukul     : ',0,0,'C');
        $pdf->Cell(66,8,$r->jam_berangkat,0,0,'C');
        $pdf->SetXY(36,73);
        $pdf->Cell(10,8,'No Travel     : ',0,0,'C');
        $pdf->Cell(66,8,$r->no_travel,0,0,'C');
        $pdf->SetXY(36,81);
        $pdf->Cell(10,8,'Harga Tiket     : ',0,0,'C');
        $pdf->Cell(66,8,$no.' x Rp.'.$r->harga,0,0,'C');
        $pdf->SetXY(36,89);
        $pdf->Cell(10,8,'Total Bayar     : ',0,0,'C');
        $pdf->Cell(66,8,'Rp.'.$no*$r->harga,0,0,'C');
        $pdf->SetFont('Arial','',10);
//        //$pdf->Line(205, 44+$no*8, 5, 44+$no*8);
//        $pdf->SetFont('Arial','B',20);
//        $pdf->SetXY(20,51+$no*8);
//        $pdf->Cell(125,8,'Total Bayar',0,0);
//        $pdf->Cell(45,8,'Rp.'.$total,0,1);
//        $pdf->Ln();
        $pdf->Output();
    }
}
