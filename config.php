<?php
	include 'database.php';
	
	//parameter koneksi mysql
	$host = "localhost";
	$user = "root";
	$pass = "";
	$mydb = "belajar";
	
	$db = new database($host,$user,$pass,$mydb);
    $db->connectMySQL();
	