<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laboratorium Teknik Informatika</title>

	<!--CSS-->
	<link href="<?php echo base_url(); ?>asset/css/materialize.min.css" rel="stylesheet"></link>
	<link href="<?php echo base_url(); ?>asset/css/home.css" rel="stylesheet"></link>

	<!--Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body>

<div class="navbar-custom">
	<nav class="transparent z-depth-0">
	<div class="nav-wrapper">
    <a href="#!" class="brand-logo">
    	<img class="logo" src="<?php echo base_url(); ?>asset/images/logo.png">
    </a>
    <a href="#" data-activates="mobile-demo" class="button-collapse">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right hide-on-med-and-down">
			<li><a href="#">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">CONTACT US</a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
			<li><a href="#">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">CONTACT US</a></li>
    </ul>
  </div>
	</nav>
</div>

<div class="container">

	<div class="parallax-container">
    <div class="parallax"><img src="<?php echo base_url(); ?>asset/images/banner2.jpg"></div>
		<div class="banner">
			<div class="banner-text">LABORATORIUM TEKNIK INFORMATIKA</div>
			<div class="banner-subtext">Laboratorium (disingkat lab) adalah tempat riset ilmiah, eksperimen, pengukuran ataupun pelatihan ilmiah dilakukan. Laboratorium biasanya dibuat untuk memungkinkan dilakukannya kegiatan-kegiatan tersebut secara terkendali.</div>
		</div>
  </div>

<div class="services-main">
<div class="row">
	<div class="col s12 m6 l6">
    <div class="card horizontal">
      <div class="card-image">
				<div class="logo-circle">
					<div class="logo-content">
						<img src="<?php echo base_url(); ?>asset/images/pelayanan.png">
					</div>
				</div>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Segala sesuatu yang berhubungan dengan kegiatan praktikum.</p>
        </div>
        <!-- <div class="card-action"> -->
          <input class="waves-effect waves-light card-action" type="submit" value="PELAYANAN" href="http://infinite01.website/pelayanan">
					<!-- <div>PELAYANAN</div> -->
			
        <!-- </div> -->
      </div>
    </div>
  </div>
	<div class="col s12 m6 l6">
    <div class="card horizontal">
      <div class="card-image">
        <div class="logo-circle">
					<div class="logo-content">
        		<img src="<?php echo base_url(); ?>asset/images/praktikum.png">
					</div>
				</div>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Soal-soal dan modul praktikum Laboratorium Teknik Informatika.</p>
        </div>
        <!-- <div class="card-action"> -->
          <a class="waves-effect waves-light card-action" href="http://35.202.202.222/praktikum">PRAKTIKUM</a>
        <!-- </div> -->
      </div>
    </div>
  </div>
</div>
</div>

</div>

<footer class="page-footer">
	<div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <div class="white-text footer-text">Laboratorium Teknik Informatika</div>
                <div class="white-text text-lighten-4 footer-subtext">Laboratorium (disingkat lab) adalah tempat riset ilmiah, eksperimen, pengukuran ataupun pelatihan ilmiah dilakukan. Laboratorium biasanya dibuat untuk memungkinkan dilakukannya kegiatan-kegiatan tersebut secara terkendali.</div>
              </div>
              <div class="col l4 offset-l2 s12">
                <div class="white-text footer-text">Contact Us</div>
                <ul>
                  <li class="contact-footer"><img src="<?php echo base_url(); ?>asset/images/location.png" class="logo-footer">E535</li>
                  <li class="contact-footer"><img src="<?php echo base_url(); ?>asset/images/instagram.png" class="logo-footer">LabTI</li>
                  <li class="contact-footer"><img src="<?php echo base_url(); ?>asset/images/facebook.png" class="logo-footer">LabTI Gunadarma</li>
                  <li class="contact-footer"><img src="<?php echo base_url(); ?>asset/images/mail.png" class="logo-footer">labti@gunadarma.ac.id</li>
                </ul>
              </div>
            </div>
          </div>
				</div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 LabTI
            </div>
          </div>
        </footer>

<script src="<?php echo base_url(); ?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/materialize.min.js"></script>

<script>
$(document).ready(function(){
		$('.parallax').parallax();
	});

$(".button-collapse").sideNav();
</script>

<style>
body {
	 display: flex;
	 min-height: 100vh;
	 flex-direction: column;
 }

 main {
	 flex: 1 0 auto;
 }
</style>

</body>
</html>
