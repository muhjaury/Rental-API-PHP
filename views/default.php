<!DOCTYPE html>
<html lang="en">

<head>
  <title>Oto Rental</title>
  <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url(); ?>assets/css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">OtoRental API</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url();;?>login">Log In</a>
          </li>          
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image:url(<?php echo base_url();?>assets/img/header-bg.jpg);">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To OtoRental</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo base_url();;?>login">Start</a>
      </div>
    </div>
  </header>

<script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>