<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #FF182A;
		color: #0F0D14;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}
	html, body {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
		background-color: #FAFBFC;
	}
	a {
		color: #FF182A;
		transition: color 350ms ease-in-out;
	}
	a:hover {
		text-decoration: none;
		color: #fff;
		background-color: #FF182A;
		transition: background-color 350ms ease-in-out;
		padding: 0 5px 0 5px;
	}
</style>

<div class="container">
	<div class="col-md-12 mt-4 pt-4 text-center justify-content-center">
		<div class="display-3 p-4" style="border: #FF182A 4px solid;">
			<h2>Selamat datang di</h2>
			<h1 class="text-white mx-auto py-2 text-bold" style="max-width: 18em; background-color: #FF182A;"><b>CodeIgniter 3 - Indonesian Edition</b></h1>
			<h5 class="text-small" style="color: #FF182A;">TableUse Bundle</h5>
		</div>
		<hr style="max-width: 15em; border-width: 0.2em; border-color: #DD4F43;">
		<p class="text-center">
			Edisi CodeIgniter ini sudah terpasang dependensi seperti Bootstrap, JQuery, Popper.js, Bootbox, JQuery DataTable dan SweetAlert2.
			<br>
			Halaman yang kamu lihat/tertampil di browser ini (termasuk halaman ini) di tampilkan secara dinamis oleh CodeIgniter. <br> Jika kamu mau edit halaman ini, kamu bisa cari berkasnya di:
		</p>
		<code>application/views/welcome_message.php</code>

		<p>Controller untuk halaman ini ada di:</p>
		<code>application/controllers/Welcome.php</code>

		<p>Baru menggunakan CodeIgniter? Baca <a href="petunjuk_penggunaan/">Petunjuk Penggunaan</a>, diringkas untuk pemula.</p>

		<p class="text-white mx-auto py-2" style="font-weight: bold; max-width: 25em; background-color: #FF182A;">Jangan takut mencoba. Happy Coding! ^^</a>.</p>
		<footer>
			<small class="text-center" style="color: rgba(160, 159, 160, 0.883);">Hal. dirender dalam {elapsed_time} detik. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Versi ' . CI_VERSION . '.' : '' ?> </small>
		</footer>
	</div>
</div>