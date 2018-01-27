<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo $judul;?></title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/materialize.css" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url();?>assets/css/style.css" type="text/css" rel="stylesheet"/>
  <link href="<?php echo base_url();?>assets/animate.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <div class="navbar-fixed">
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url();?>" class="brand-logo">Travellaku</a>
      <ul class="right hide-on-med-and-down" id="garis">
          <li><a class="modal-trigger" href="<?php echo base_url();?>cetak_tiket">Cetak Tiket</a></li>
         <li><a href="konfirmasi">Konfirmasi Tiket</a></li>
         <li><a href="<?php echo base_url();?>admin">Admin</a></li>
      </ul>
<ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  </div>