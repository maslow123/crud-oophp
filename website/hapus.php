<?php
	include 'config/database.php';
	
	$host="localhost";
	$user="root";
	$pass="";
	$db  ="belajar";
	
	//instansisasi dan setting properties objek database
	
	$dbase = new database($host,$user,$pass,$db);
	//koneksi ke mysql via method
	$dbase->connectMySQL();
	//proses hapus data melalui ID yang dimasukkan
	if(isset($_GET['op'])){
		if($_GET['op'] == 'del'){
			// baca ID dari parameter ID buku yang akan dihapus
			$id = $_GET['id'];
			// proses hapus data buku berdasarkan ID via method
			$dbase->hapus($id);
		}
	}
	//tampilkan semua buku
	$dbase->tampilkan();