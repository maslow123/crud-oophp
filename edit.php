<html>
	<head>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
<body>
<?php
	include 'database.php';
	
	$host="localhost";
	$user="root";
	$pass="";
	$db  ="belajar";
	
	//instansisasi dan setting properties objek database
	
	$dbase = new database($host,$user,$pass,$db);
	//koneksi ke mysql via method
	$dbase->connectMySQL();
	//proses hapus data melalui ID yang dimasukkan
	?>	
	<div class="col-md-12">
		<div class='form-group'>
			<div class='col-sm-10'>
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-align:center;">Ubah Data Siswa</div>
					<div class="panel-body">
						<form action="proses.php?aksi=update" method="post">
							<?php foreach($dbase->edit($_GET['id']) as $d){;?>
							<table>
								<tr>
									<td>Judul</td>
									<td>
										<div class="col-sm-10">
											<input type="hidden" name="id" value="<?php echo $d['id'];?>">
											<input class='form-control' type="text" name="judul" value="<?php echo $d['judul'];?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>Pengarang</td>
									<td>
										<div class="col-sm-10">
											<input class='form-control' type="text" name="pengarang" value="<?php echo $d['pengarang'];?>">
										</div>
									</td>
										
								</tr>
								<tr>
									<td>Penerbit</td>
									<td>
										<div class="col-sm-10">
											<input class='form-control' type="text" name="penerbit" value="<?php echo $d['penerbit'];?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>Tahun Terbit</td>
									<td>
										<div class="col-sm-10">
											<input class='form-control' type="text" maxlength="4" size="4" name="tahunTerbit" value="<?php echo $d['tahunTerbit'];?>">
										</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<div class='btn-form col-sm-12'>
											<button type="submit" class='btn btn-primary'>Simpan</button>
										</div>
									</td>
								</tr>
							</table>
							<?php } ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>