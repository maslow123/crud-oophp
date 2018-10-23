<?php
	session_start();
	include 'config/config.php';
	

	if(empty($_SESSION['username'])){
		echo "<script>alert('silahkan login terlebih dahulu');
					  document.location.href='../index.php'</script>";
	}
	$username = $_SESSION['username'];
?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>
<?php
	$dbase->tampilkan_operator();
	?>	
</body>
</html>