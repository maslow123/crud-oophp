<?php
	session_start();
	include 'config/config.php';
	// jika session kosong maka akan kembali ke menu login
	if(empty($_SESSION['operator'])){
		echo "<script>alert('kamu harus login sebagai operator untuk mengaksesnya');
					  window.history.back();</script>";
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="css/materialize.css">	
		<!-- 
			CSS ONLINE -->	
		<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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