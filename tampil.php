<html>
	<head>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
<body>
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
	if(isset($_GET['op'])){
		if($_GET['op'] == 'del'){
			// baca ID dari parameter ID buku yang akan dihapus
			$id = $_GET['id'];
			// proses hapus data buku berdasarkan ID via method
			$dbase->hapus($id);
		}
	}
	$dbase->tampilkan();
	//tampilkan buku via method
	?>
	
	
</body>
</html>