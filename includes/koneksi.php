<?php
	$host		= 'localhost';
	$username	= 'root';
	$password	= '';
	$db_name	= 'tugasimk';
	
	$koneksi = mysqli_connect($host,$username,$password,$db_name);
	if($koneksi->connect_error) {
		die('Koneksi Gagal: '.$koneksi->connect_error);
	}
?>