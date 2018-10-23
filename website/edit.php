<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>
<?php
	include 'config/config.php';
	?>	
	<div class="col-md-15">
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
									</td>
								</tr>
								<tr>
									<td>Jenis Buku</td>
									<td>
										<div class="col-sm-10">
											<select name="jenis_buku" class="form-control">
												<option value="Text Book"<?php if($d['jenis_buku'] == "Text Book")
												{echo 'selected';}?>>Text Book</option>
												<option value="Majalah"<?php if($d['jenis_buku'] == "Majalah")
												{echo 'selected';}?>>Majalah</option>
												<option value="Tutorial"<?php if($d['jenis_buku'] == "Tutorial")
												{echo 'selected';}?>>Tutorial</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td><br/></td>
								</tr>							
								<tr>
									<td>&nbsp;</td>
									<td>
										<div class='btn-form col-sm-12'>
											<button type="submit" class='btn btn-primary'>Simpan</button>
											<a href="tampil.php">
												<button type="button" class='btn btn-default'>Batal</button>
											</a>
										</div>
									</td>
								</tr>
							</table>
							<?php } ?>
						</form>
					<!-- end panel-body -->
					</div>
				<!-- end panel-primary -->
				</div>
			<!-- end col-sm -->
			</div>
		<!-- end form-group --> 
		</div>
	<!-- end col-md -->
	</div>
</body>
</html>