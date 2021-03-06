<!DOCTYPE html>
<html lang="en">

<head>

  <title>OtoRental</title>

  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">OtoRental API</div>
      <div class="list-group list-group-flush">
        <!-- <a href="<?php echo base_url();?>profile" class="list-group-item list-group-item-action bg-light">Dashboard</a> -->
        <a href="<?php echo base_url();?>profile/dokumentasi" class="list-group-item list-group-item-action bg-light">Dokumentasi</a>
      </div>
    </div>
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url();?>profile/rental">Rental Profile</a>
                <a class="dropdown-item" href="<?php echo base_url();?>profile/token">API Token</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>profile/logout">Logout</a>
            </li>
            
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        <h1 class="md-4">API TOKEN</h1>
        <div class="form-group" align="center">
          <label for="usr">Token:</label>
          <input type="text" class="form-control text-center" id="token" value="<?php foreach($key as $value){echo $value['or_key'];}?>" disabled style="width: 400px;margin-bottom: 10px">
          <a href="<?php echo base_url();?>profile/new"><button id="gettoken" type="button" class="btn btn-primary">Get New</button></a>
        </div>
      </div>
    </div>

  </div>

  <script src="<?php echo base_url();?>assets/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>
</html>