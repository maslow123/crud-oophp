<html>
	<head>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
<body>
<?php
	include 'config.php';
	
	if(isset($_GET['op'])){
		if($_GET['op'] == 'del'){
			// baca ID dari parameter ID buku yang akan dihapus
			$id = $_GET['id'];
			// proses hapus data buku berdasarkan ID via method
			$dbase->hapus($id);
		}
	} 
	$dbase->tampilkan();
	?>
</body>
</html>