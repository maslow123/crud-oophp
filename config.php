<?php
	include 'database.php';
	
	//parameter koneksi mysql
	$host = "localhost";
	$user = "root";
	$pass = "";
	$mydb = "belajar";
	
	$dbase = new database($host,$user,$pass,$mydb);
    $dbase->connectMySQL();
	