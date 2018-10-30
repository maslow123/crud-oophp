<html>
	<head>
		<link rel="stylesheet" href="../css/materialize.css">		
		<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
	</head>
<body>
<?php
	session_start();
	include '../models/config.php';

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
		echo "<script>document.location.href = '../../index.php'</script>";
	}
	?>	
	<nav>
		<form method="post">
			<div class="nav-wrapper blue"">
				<a href="#" class="brand-logo">
					<img src="../image/logo.png" width=200 height=50/>
				</a>
				<span class="pull-right">
					<i class="icon-user"></i><?php foreach($dbase->get_nama_admin() as $x){echo $x['nama'];} ?>
					<button type="submit" name="logout" style='background:transparent;border:0;cursor: pointer;' 			
						onclick="return confirm('Yakin ingin logout?')">
						<i class="fa fa-sign-out" style="font-size:20px;color:white;"></i> 
						<span style="color:white;">Logout</span> 
					</button>					 	
				</span>
			</div>
		</form>
	</nav>
	<div class="row">
		<!-- proses pengiriman form ke proses.php -->
		<form action="proses.php?aksi=cari" method="post">										
			<div class="row">
				<div class="input-field col s5">						
					<a href='input.php'>
						<button type="button" class="btn waves-effect waves-light blue">
							Tambah data<i class="material-icons right">add_box</i>
						</button>												
					</a>							
				</div>
				<div style="margin-left:60em;">
					<div class="input-field col s9">									
						<input placeholder="masukkan judul buku.." type="text"  name="keyword" required>
					</div>
					<div class="input-field col s2">
						<button class="waves-effect waves-light btn blue"type="submit">
							<i class="material-icons">search</i>
						</button>
					</div>
				</div>
			</div>
		</form>							
		<table class="responsive-table centered striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th>Jenis Buku</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					// menangkap perulangan array dari query $result
					foreach($dbase->tampilkan_admin() as $data){
						echo"<tr>
								<td>".$i."</td>
								<td>".$data['judul']."</td>
								<td>".$data['pengarang']."</td>
								<td>".$data['penerbit']."</td>
								<td>".$data['tahunTerbit']."</td>
								<td>".$data['jenis_buku']."</td>
								<td>
									<a href='edit.php?id=".$data['id']."&aksi=edit'
										style='text-decoration:none;'>
										<button type='button' class='btn-floating blue'>
											<span class='fa fa-edit' style='font-size:18px;'></span>
										</button>
									</a>"?>
									<a href="<?php echo $_SERVER['PHP_SELF']?>?op=del&id=<?php echo $data['id']?>"	
										style='text-decoration:none;' onclick="return confirm('Yakin hapus?')">
										<button type='button' class="btn-floating red">
											<span class='fa fa-remove' style='font-size:18px;'></span>
										</button>
									</a>
								<?php
								"</td>
							</tr>";
						$i++;
					// end foreach
					}
				?>		
			</tbody>
		</table>
	<!-- end row -->
	</div>
</body>
</html>