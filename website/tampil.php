<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
        <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
	</head>
<body>
<?php
	session_start();
	include 'config/config.php';
	
	// jika session kosong maka akan kembali ke menu login
	if(empty($_SESSION['username'])){
		echo "<script>alert('silahkan login terlebih dahulu');
					  document.location.href='../index.php'</script>";
	}
	if(isset($_GET['op'])){
		if($_GET['op'] == 'del'){
			// baca ID dari parameter ID buku yang akan dihapus
			$id = $_GET['id'];
			// proses hapus data buku berdasarkan ID via method
			$dbase->hapus($id);
		}
	} 
	$dbase->tampilkan_admin();
	?>	
</body>
</html>