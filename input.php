<html>
<head>
	<link rel="stylesheet" href="bootstrap.css">
</head>
	<div class="col-md-15">
		<div class="form-group">
			<div class="col-sm-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Siswa</div>
					<div class="panel-body">
						<form action="proses.php?aksi=tambah" method="post">
							<table>
								<tr>
									<td>Judul</td>
									<td>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="judul">
										</div>
									</td>
								</tr>
								<tr>
									<td>Pengarang</td>
									<td>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="pengarang">
										</div>								
									</td>
								</tr>
								<tr>
									<td>Penerbit</td>
									<td>
										<div class="col-sm-10">
											<input class="form-control" type="text" name="penerbit">
										</div>
									</td>
								</tr>
								<tr>
									<td>Tahun Terbit</td>
									<td>
										<div class="col-sm-10">
											<input class="form-control" type="text" size="4" maxlength="4" name="tahunTerbit">
										</div>
									</td>
								</tr>
								<tr>
									<td>Jenis Buku</td>
									<td>
										<div class="col-sm-10">
											<select name="jenis" class="form-control" style="cursor:pointer;">
												<option value="Text Book">Text Book</option>
												<option value="Majalah">Majalah</option>
												<option value="Tutorial">Tutorial</option>
											</select> 
										</div>
									</td>
								<tr>
									<td><br></td>
									<td></td>					
								<tr>
									<td>&nbsp;</td>
									<td>
										<div class="btn-form col-sm-12">
											<button class="btn btn-primary" type="submit" onclick="return confirm('Yakin Simpan?')">Simpan</button>					
											<a href="tampil.php">
												<button type="button" class="btn btn-default">Batal</button>
											</a>											
										</div>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</html>
	