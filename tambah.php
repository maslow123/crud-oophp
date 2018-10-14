<?php
	include 'database.php';
	
	$host="localhost";
	$user="root";
	$pass="";
	$db  ="belajar";
	
	//instansisasi dan setting properties objek database
	
	$dbase = new database($host,$user,$pass,$db);
	//koneksi ke mysql via method
	$dbase->connectMySQL();
	//insert buku via method
	$dbase->addBuku('Buku OOP','M Fadhly NR','Diri sendiri',2012);
	