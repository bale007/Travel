<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/admin/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/dist/bootstrap-clockpicker.min.css">
</head>

<style type="text/css">
.navbar h3 {
  color: #f5f5f5;
  margin-top: 14px;
}
.hljs-pre {
  background: #f8f8f8;
  padding: 3px;
}
.footer {
  border-top: 1px solid #eee;
  margin-top: 40px;
  padding: 40px 0;
}
.input-group {
  width: 110px;
  margin-bottom: 10px;
}
.pull-center {
  margin-left: auto;
  margin-right: auto;
}
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
@media (max-width: 767px) {
  .pull-center {
    float: right;
  }
}
</style>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin">Dashboard Travellaku</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Daftar Rute</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="armada">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Daftar Armada</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="admin_konfirmasi">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Konfirmasi Tiket</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="pemesan">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Daftar Pemesanan Tiket</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <?php echo form_open ('pemesan')?>
          <select name="status">
            <option selected="" disabled="">Pilih Status Pembayaran</option>
            <option value="1">Sudah Di Bayar</option>
            <option value="0">Belum Di Bayar</option>
            <option value="">Tampilkan Semua</option>
          </select>
          <button type="submit" class="btn btn-primary">Tampilkan</button>
        </form>
        </li>
      </ol>
    </div>

    <div class="container-fluid">
      <div class="panel panel-default">
        <!-- Default panel tabel -->
          <!-- Example DataTables Card-->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Daftar Pemesan Tiket</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No Tagihan</th>
                          <th>Nama Pemesan</th>
                          <th>No Tiket</th>
                          <th>No_travel</th>
                          <th>Asal</th>
                          <th>Tujuan</th>
                          <th>Harga Tiket</th>
                          <th>Tanggal Berangkat</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                            foreach ($record->result() as $r){
                          ?>    
                              <tr>
                                <td><?php echo $r->no_tagihan;?></td>
                                <td><?php echo $r->nama;?></td>
                                <td><?php echo $r->no_tiket;?></td>
                                <td><?php echo $r->no_travel;?></td>
                                <td><?php echo $r->asal;?></td>
                                <td><?php echo $r->tujuan;?></td>
                                <td><?php echo $r->harga;?></td>
                                <td><?php echo $r->tgl_berangkat;?></td>
                              </tr>
                          <?php 
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
      </div>
        <!--#END# Tabel-->
    </div>

    
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/assets/js/bootstrap.min.js"></script>

</body>

</html>
