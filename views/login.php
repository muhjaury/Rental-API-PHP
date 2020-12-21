<!DOCTYPE html>
<html lang="en-US">

<head>
<title>Login</title>

<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">

<main>

<div class="znav-container znav-white znav-fixed" id="znav-container">
	<div class="container">
		<nav class="navbar navbar-toggleable-md">
			<a class="navbar-brand overflow-hidden" href="<?php echo base_url();?>">OTORENTAL API</a>
		</nav>
	</div>
</div>



<section class="py-0 font-1">
	<div class="container-fluid">
		<div class="row align-items-center text-center justify-content-center h-full">
			<div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
				<h3 class="fw-300 mb-5">Masuk</h3>
				<form method="post" action="<?php echo base_url(); ?>login/login_validation">
					<input class="form-control mb-3" type="email" placeholder="Email" name="email">
					<input class="form-control mb-3" type="password" placeholder="Password" name="password">
					<div class="row align-items-center">
						<div class="col text-left">
							<div class="fs--1 d-inline-block">
								<!-- <a href="#">Lupa Password?</a> -->
							</div>
						</div>
						<div class="col text-right">
							<button class="btn-block btn btn-primary" type="submit">Log in</button>
						</div>
					</div>
				</form>
					<?php
						echo $this->session->flashdata("error");
					?>
				
				<hr class="color-9 mt-6">
				<div class="fs--1 mt-4">Belum memiliki Akun? 
					<a href="<?php echo base_url();?>register">Daftar.</a>
				</div>
			</div>
		</div>
	</div>
</section>

</main>
<script>

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-76729372-3', 'auto');
ga('send', 'pageview');

</script>

</body>
</html>