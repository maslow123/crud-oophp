<?php
	session_start();
	include '../models/config.php';
	// jika session kosong maka akan kembali ke menu login
	if(empty($_SESSION['operator'])){
		echo "<script>alert('kamu harus login sebagai operator untuk mengaksesnya');
					  window.history.back();</script>"; 
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/materialize.css">	
		<!-- 
			CSS ONLINE -->	
		<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
	<nav>
		<form method="post">
			<div class="nav-wrapper blue"">
				<a href="#" class="brand-logo">
					<img src="../image/logo.png" width=200 height=50/>
				</a>
				<span class="pull-right">
					<i class="icon-user"></i><?php foreach($dbase->get_nama_op() as $x){echo $x['nama'];}?>
					<button type="submit" name="logout" style='background:transparent;border:0;cursor: pointer;' onclick="return confirm('Yakin ingin logout?')">
						 <i class="fa fa-sign-out" style="font-size:20px;color:white;"></i> 
						 <span style="color:white;">Logout</span> 
					</button>					 	
				</span>
			</div>
		</form>
	</nav>
	<div class="row">
		<!-- proses pengiriman form ke proses.php -->							
		<form action="proses.php?aksi=cari-operator" method="post">				
			<div class="row" style="margin-left:50em;">
				<div class="input-field col s10">									
					<input placeholder="masukkan judul buku.." type="text"  name="keyword" required>
				</div>
				<div class="input-field col s2">
					<button class="waves-effect waves-light btn-small blue" type="submit">
						<i class="material-icons">search</i>
					</button>
				</div>
			</div>
		</form>							
		<table class="responsive-table centered">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th>Jenis Buku</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					// menangkap perulangan array dari query $result
					foreach($dbase->tampilkan_operator() as $data){
						echo"<tr>
								<td>".$i."</td>
								<td>".$data['judul']."</td>
								<td>".$data['pengarang']."</td>
								<td>".$data['penerbit']."</td>
								<td>".$data['tahunTerbit']."</td>
								<td>".$data['jenis_buku']."</td>
								<td> Tersedia </td>		
							</tr>";
						$i++;
					// end foreach
					}
				?>
			</tbody>
		</table>
	<!-- end row -->
	</div>
	<?php
		//jika tombol logout di klik, session akan berakhir...
		if(isset($_POST['logout'])){
			$dbase->logout();
			echo "<script>document.location.href = '../index.php'</script>";
		}
	?>	
</body>
</html>