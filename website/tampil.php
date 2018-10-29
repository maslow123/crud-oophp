<html>
	<head>
		<link rel="stylesheet" href="css/materialize.css">		
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	</head>
<body>
<?php
	session_start();
	include 'config/config.php';

	// jika session kosong maka akan kembali ke menu login
	if(empty($_SESSION['admin'])){
		echo "<script>alert('kamu harus login sebagai admin untuk mengaksesnya');
					  window.history.back(); </script>";
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
	
	//jika tombol logout di klik, session akan berakhir...
	if(isset($_POST['logout'])){
		$dbase->logout();
		echo "<script>document.location.href = '../index.php'</script>";
	}
	?>	
</body>
</html>