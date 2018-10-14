<?php
	include('database.php');
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "belajar";
	
	$dbase = new database($host,$user,$pass,$db);
	$dbase -> connectMySQL();
	
	$aksi = $_GET['aksi'];
	if($aksi == "update"){
		$dbase->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
	}elseif($aksi == "tambah"){
		$dbase->input($_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
	}