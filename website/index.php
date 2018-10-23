<?php
	session_start();
	include 'config/config.php';
	// jika session kosong maka akan kembali ke menu login
	if(empty($_SESSION['username'])){
		echo "<script>alert('silahkan login terlebih dahulu');
					  document.location.href='../index.php'</script>";
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
	</head>
<body>
<?php
	$dbase->tampilkan_operator();

	//jika tombol logout di klik, session akan berakhir...
	if(isset($_POST['logout'])){
		$dbase->logout();
		echo "<script>document.location.href = '../index.php'</script>";
	}
	?>	
</body>
</html>