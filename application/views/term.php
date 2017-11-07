<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laboratorium Teknik Informatika</title>

	<!--CSS-->
	<link href="<?php echo base_url(); ?>asset/css/materialize.min.css" rel="stylesheet"></link>
	<link href="<?php echo base_url(); ?>asset/css/term.css" rel="stylesheet"></link>

	<!--Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

</head>

<body>
<div class="term-content">
	<div class="term-title">Syarat dan Ketentuan Pelaporan</div>
	<ul class="collapsible" data-collapsible="accordion">
	  <li>
	    <div class="collapsible-header term-list">
	      <i class="material-icons">local_hospital</i>
	      Sakit
	      </div>
	    <div class="collapsible-body">
				<div class="list-description">Praktikan datang ke E535 membawa :</div>
				<ol>
					<li class="list">Surat dokter (bukan fotocopy)</li>
					<li class="list">Surat orang tua & KTP orang tua</li>
				</ol>
			</div>
	  </li>
	  <li>
	    <div class="collapsible-header term-list">
	      <i class="material-icons">access_time</i>
	      Terlambat
	      </div>
	    <div class="collapsible-body">
				<div class="list-description">Praktikan datang ke E535 membawa :</div>
				<ol>
					<li class="list">Surat dari pihak KRL (bila keterlambatan kereta)</li>
					<li class="list">Kwitansi (bila terlambat karena masalah kendaraan)</li>
				</ol>
			</div>
	  </li>
		<li>
	    <div class="collapsible-header term-list">
	      <i class="material-icons">insert_invitation</i>
	      Izin
	      </div>
	    <div class="collapsible-body">
				<div class="list-description">Praktikan datang ke E535 membawa :</div>
				<ol>
					<li class="list">Surat dari pihak kampus  & KTP (bila izin acara kampus)</li>
					<li class="list">Surat orang tua & KTP (bila izin acara keluarga)</li>
				</ol>
			</div>
	  </li>
	</ul>

	<div class="term-title">Langkah-Langkah Pelaporan</div>
	<ul class="collapsible" data-collapsible="accordion">
	  <li>
	    <div class="collapsible-header term-list">
	      <i class="material-icons">format_list_numbered</i>
	      Steps
	      </div>
	    <div class="collapsible-body">
				<ol>
					<li>Untuk praktikan yang belum mempunyai akun pelayanan harus membuat
						akun pelayanan terlebih dahulu dengan memasukkan NPM (seperti gambar di bawah). Jika
						praktikan sudah memiliki akun pelayanan, bisa langsung melanjutkan
						ke step 3.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 2.png"></div>
					<li>Setelah memasukkan NPM, akan masuk ke tampilan pembuatan akun pelayanan.
					Praktikan membuat username dan password untuk akun pelayanan yang akan dibuat.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 3.png"></div>
					<li>Jika praktikan sudah membuat akun pelayanan, login menggunakan akun
					yang sudah dibuat tersebut.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 1.png"></div>
					<li>Praktikan akan masuk ke tampilan home dari website pelayanan (seperti gambar di bawah).
					Terdapat beberapa menu yang ada di sebelah kiri. Untuk melakukan
					pelaporan ketidakhadiran, pilih menu "Laporan Ketidakhadiran". Untuk
				  melakukan pelaporan kartu hilang, dapat memilih menu "Lapor Kartu Hilang".</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 4.png"></div>
					<li>Jika praktikan memilih menu "Laporan Ketidakhadiran", akan masuk
					ke tampilan seperti gambar di bawah. Praktikan dapat memilih salah satu alasan
					ketidakhadiran berupa sakit, terlambat, atau izin.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 5.png"></div>
					<li>Setelah memilih alasan ketidakhadiran, praktikan memilih mata praktikum dan
					pertemuan ke berapa dimana praktikan tidak hadir. Serta masukkan keterangan di
					tempat yang telah disediakan.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 9.png"></div>
					<li>Berikutnya akan masuk ke tampilan input laporan. Disitu praktikan akan diminta untuk memasukkan
					nomor handphone yang aktif dan surat-surat yang dibutuhkan (baca Syarat dan Ketentuan Pelaporan pada menu sebelumnya).</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 11.png"></div>
					<li>Jika sudah melakukan input laporan, maka praktikan akan diberikan
					tugas sesuai dengan mata praktikum dan pertemuan yang bersangkutan.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 12.png"></div>
					<li>Tugas tersebut dikerjakan dengan format yang sama seperti mengerjakan
					laporan akhir seperti biasa (disimpan dalam bentuk pdf), kemudian tugas tersebut harus
					diupload di website pelayanan kembali maksimal h-1 praktikum yang berikutnya.</li>
					<li>Untuk mengupload tugas yang diberikan dapat dilakukan dengan menekan tombol
					upload yang berada di bawah tombol delete berwarna merah pada tampilan tugas seperti gambar pada langkah 8 (tombol upload warna hijau).
					Kemudian praktikan harus memasukkan tugas dengan menekan tombol file seperti gambar di bawah.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 14.png"></div>
					<li>Selanjutnya tugas yang sudah diupload tersebut akan dikonfirmasi oleh
					staff pelayanan agar dapat dicetak QR code.</li>
					<li>Setelah tugas terkonfirmasi, praktikan akan masuk ke tampilan QR code seperti gambar di bawah.
					Cetak QR code tersebut dengan menekan tombol print berwarna biru. QR code
					tersebut harus dibawa dan diserahkah ke PJ yang bersangkutan saat praktikum
					selanjutnya agar praktikan dapat diizinkan masuk. Kemudian QR code tersebut
					akan discan oleh PJ dan praktikan akan diberikan blanko yang harus dibayarkan
					ke bank DKI sebagai denda ketidakhadiran.</li>
					<div class="term-image-content"><img class="term-image" src="<?php echo base_url(); ?>asset/images/Step 16.png"></div>
					<li>Jika blanko sudah dibayarkan ke bank DKI, praktikan harus melakukan
					konfirmasi blanko tersebut ke E535 kembali. Setelah blanko terkonfirmasi, PJ
					baru dapat menilai tugas yang dikerjakan oleh praktikan tersebut.</li>
					<li>Proses pelaporan selesai.</li>
				</ol>
			</div>
	  </li>
	</ul>

	<a class="waves-effect waves-light btn term-button" href="http://infinite01.website/pelayanan">next</a>

</div>

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
