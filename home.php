<?php
	session_start();
	include 'config/conf.php';

	$users = new User();	

	if(empty($_SESSION['username'])){
		echo "<script>alert('silahkan login terlebih dahulu');
					  document.location.href='index.php'</script>";
	}
	$username = $_SESSION['username'];
	
	if(isset($_POST['logout'])){
		$users->logout();
		echo "<script>alert('anda telah keluar !');
					  document.location.href='index.php'</script>";
		}
	?>
	<!DOCTYPE html>
	<html>
		<body>
			<?php foreach($users->bacaUser($username) as $v){?>
				<h1 align="center">SELAMAT DATANG <b><?php echo $v['nama'];?></b></h1>
			<?php }?>
			<form method="POST">
				<input type="submit" name="logout" value="logout">
			</form>
		</body>
	</html>