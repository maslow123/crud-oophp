<?php
	session_start();
	include 'conf.php';

	$user = new User();	

	if(empty($_SESSION['username'])){
		echo "<script>alert('silahkan login terlebih dahulu');
					  document.location.href='home.php'</script>";
	}
	$username = $_SESSION['username'];
	?>
	<!DOCTYPE html>
	<html>
		<body>
			<h1 align="center">SELAMAT DATANG <?php echo $username;?></h1>
		</body>
	</html>