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
        <li class="list-group-item list-group-item-action bg-light">
            <ul><a href="#Select">Select</a></ul>
            <ul><a href="#Insert">Insert</a></ul>
            <ul><a href="#Update">Update</a></ul>
            <ul><a href="#Delete">Delete</a></ul>
        </li>
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
        <h2 class="md-4" id="Select">Rental</h2>
        <p>Method "Select" digunakan untuk melihat daftar seluruh mobil yang direntalkan.</p>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#rental-request-url">URL</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rental-request-parameter">Parameter</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rental-example">Example</a></li>
        </ul>

        <div class="tab-content">
            <div class="container tab-pane active" id="rental-request-url" style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>URL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GET</td>
                            <td>localhost/UAS-2019/select</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade" id="rental-request-parameter"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>Parameter</td>
                            <td>Wajib</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>GET/HEAD</td>
                            <td>key</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>API Key/Token</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>tempat</td>
                            <td>Tidak</td>
                            <td>String</td>
                            <td>Nama Tempat Rental</td>
                        </tr>
                        <tr>
                            <td>GET</td>
                            <td>mobil</td>
                            <td>Tidak</td>
                            <td>String</td>
                            <td>Nama Mobil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade" id="rental-example"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/73ad1f506b721efeacb14fb7ce00019c.js"></script>
            </div>
        </div>
        <h2 class="md-4">Response</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#rental-view-response">Response Sukses</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rental-fail-response">Response Gagal</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rental-explain-response">Penjelasan Response</a></li>
        </ul>
        <div class="tab-content">
            <div class="container tab-pane active" id="rental-view-response" style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/195f13b621cdd748f98fecccef3da40e.js"></script>
            </div>
            <div class="container tab-pane fade" id="rental-fail-response"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/4ef1e8672a3d8de38631bb9618d2d6b0.js"></script>
            </div>
            <div class="container tab-pane fade" id="rental-explain-response"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Komponen</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>code</td>
                            <td>NUMBER</td>
                            <td>Kode respon API</td>
                        </tr>
                        <tr>
                            <td>description</td>
                            <td>String</td>
                            <td>Keterangan dari kode respon</td>
                        </tr>
                        <tr>
                            <td>ntempat</td>
                            <td>String</td>
                            <td>Nama Tempat Rental</td>
                        </tr>
                        <tr>
                            <td>nmobil</td>
                            <td>String</td>
                            <td>Nama Mobil</td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td>String</td>
                            <td>Harga sewa mobil per hari</td>
                        </tr>
                        <tr>
                            <td>alamat</td>
                            <td>String</td>
                            <td>Alamat Tempat Rental</td>
                        </tr>
                        <tr>
                            <td>no_telp</td>
                            <td>String</td>
                            <td>Nomor Telepon Tempat Rental</td>
                        </tr>
                        <tr>
                            <td>status</td>
                            <td>String</td>
                            <td>Ketersediaan Mobil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        <h2 class="md-4" id="Input">Input Data</h2>
        <p>Method "AddMobil" digunakan untuk memasukkan data mobil rental yang baru.</p>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#input-request-url">URL</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#input-request-parameter">Parameter</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#input-example">Example</a></li>
        </ul>

        <div class="tab-content">
            <div class="container tab-pane active" id="input-request-url" style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>URL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST</td>
                            <td>localhost/UAS-2019/addmobil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade " id="input-request-parameter"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>Parameter</td>
                            <td>Wajib</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST/HEAD</td>
                            <td>key</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>API Key/Token</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>mobil</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Nama Mobil</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>foto</td>
                            <td>Tidak</td>
                            <td>File</td>
                            <td>Foto Mobil</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>harga</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Harga Rental per Hari</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>status</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Keterangan Mobil Rental [Ada/Terpakai]</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade" id="input-example"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/07aef3e73d52c5991f303fa6fd713971.js"></script>
            </div>
            <h2 class="md-4">Response</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#input-view-response">Response Sukses</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#input-fail-response">Response Gagal</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#input-explain-response">Penjelasan Response</a></li>
            </ul>
            <div class="tab-content">
                <div class="container tab-pane active" id="input-view-response" style="padding-left: 0px;">
                    <script src="https://gist.github.com/muhjaury/92e42cec60b98b6c4cb9cbc4836ced5f.js"></script>
                </div>
                <div class="container tab-pane fade" id="input-fail-response"  style="padding-left: 0px;">
                    <script src="https://gist.github.com/muhjaury/4ef1e8672a3d8de38631bb9618d2d6b0.js"></script>
                </div>
                <div class="container tab-pane fade" id="input-explain-response"  style="padding-left: 0px;">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>code</td>
                                <td>NUMBER</td>
                                <td>Kode respon API</td>
                            </tr>
                            <tr>
                                <td>description</td>
                                <td>String</td>
                                <td>Keterangan dari kode respon</td>
                            </tr>
                            <tr>
                                <td>Nama Mobil</td>
                                <td>String</td>
                                <td>Nama mobil yang direntalkan</td>
                            </tr>
                            <tr>
                                <td>Foto</td>
                                <td>String</td>
                                <td>Nama foto dari mobil rental</td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>String</td>
                                <td>Harga sewa mobil rental per hari</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>String</td>
                                <td>Ketersediaan Mobil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>

        <h2 class="md-4" id="Update">Update Data</h2>
        <p>Method "UpdateCar" digunakan untuk memperbarui data mobil rental.</p>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#update-request-url">URL</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#update-request-parameter">Parameter</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#update-example">Example</a></li>
        </ul>

        <div class="tab-content">
            <div class="container tab-pane active " id="update-request-url" style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>URL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST</td>
                            <td>localhost/UAS-2019/updatecar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade " id="update-request-parameter"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>Parameter</td>
                            <td>Wajib</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST/HEAD</td>
                            <td>key</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>API Key/Token</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>nmobil</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Nama Mobil</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>harga</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Harga Rental per Hari</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>status</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Keterangan Mobil Rental [Ada/Terpakai]</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade" id="update-example"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/3330434242a44b36d75a5ee8defd0702.js"></script>
            </div>
            <h2 class="md-4">Response</h2>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#update-view-response">Response Sukses</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#update-fail-response">Response Gagal</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#update-explain-response">Penjelasan Response</a></li>
            </ul>
            <div class="tab-content">
                <div class="container tab-pane active" id="update-view-response" style="padding-left: 0px;">
                    <script src="https://gist.github.com/muhjaury/000d87a0c0f67baec4fc273d936c72a4.js"></script>
                </div>
                <div class="container tab-pane fade" id="update-fail-response"  style="padding-left: 0px;">
                    <script src="https://gist.github.com/muhjaury/4ef1e8672a3d8de38631bb9618d2d6b0.js"></script>
                </div>
                <div class="container tab-pane fade" id="update-explain-response"  style="padding-left: 0px;">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>Komponen</td>
                                <td>Tipe</td>
                                <td>Keterangan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>code</td>
                                <td>NUMBER</td>
                                <td>Kode respon API</td>
                            </tr>
                            <tr>
                                <td>description</td>
                                <td>String</td>
                                <td>Keterangan dari kode respon</td>
                            </tr>
                            <tr>
                                <td>Nama Mobil</td>
                                <td>String</td>
                                <td>Nama mobil yang direntalkan</td>
                            </tr>
                            <tr>
                                <td>Harga Terbaru</td>
                                <td>String</td>
                                <td>Harga sewa mobil rental per hari</td>
                            </tr>
                            <tr>
                                <td>Status Terbaru</td>
                                <td>String</td>
                                <td>Ketersediaan Mobil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>

        <h2 class="md-4" id="Delete">Delete Data</h2>
        <p>Method "Delete" digunakan untuk menghapus data mobil rental.</p>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#delete-request-url">URL</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#delete-request-parameter">Parameter</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#delete-example">Example</a></li>
        </ul>

        <div class="tab-content">
            <div class="container tab-pane active " id="delete-request-url" style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>URL</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST</td>
                            <td>localhost/UAS-2019/deletecar</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade " id="delete-request-parameter"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Method</td>
                            <td>Parameter</td>
                            <td>Wajib</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>POST/HEAD</td>
                            <td>key</td>
                            <td>Ya</td>
                            <td>String</td>
                            <td>API Key/Token</td>
                        </tr>
                        <tr>
                            <td>POST</td>
                            <td>nmobil</td>
                            <td>Wajib</td>
                            <td>String</td>
                            <td>Nama Mobil</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container tab-pane fade" id="delete-example"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/80468d6cbda6279e913b4895d16fcef0.js"></script>
            </div>
        </div>
        <h2 class="md-4">Response</h2>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#delete-view-response">Response Sukses</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#delete-fail-response">Response Gagal</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#delete-explain-response">Penjelasan Response</a></li>
        </ul>
        <div class="tab-content">
            <div class="container tab-pane active" id="delete-view-response" style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/1b248d5df37b72a7c9f8090e9ec7f286.js"></script>
            </div>
            <div class="container tab-pane fade" id="delete-fail-response"  style="padding-left: 0px;">
                <script src="https://gist.github.com/muhjaury/4ef1e8672a3d8de38631bb9618d2d6b0.js"></script>
            </div>
            <div class="container tab-pane fade" id="delete-explain-response"  style="padding-left: 0px;">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Komponen</td>
                            <td>Tipe</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>code</td>
                            <td>NUMBER</td>
                            <td>Kode respon API</td>
                        </tr>
                        <tr>
                            <td>description</td>
                            <td>String</td>
                            <td>Keterangan dari kode respon</td>
                        </tr>
                        <tr>
                            <td>nmobil</td>
                            <td>String</td>
                            <td>Nama mobil yang terhapus</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-right" style="margin-right: 20px;">2019 ©
    <a href="https://www.facebook.com/muhjaury">MjReaper Team </a>
  </div>
  <!-- Copyright -->

</footer>
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