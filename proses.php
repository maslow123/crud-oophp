<html>
	<head>
		<link rel="stylesheet" href="bootstrap.css">
	</head>
<body>
<?php
	include('config.php');
	
	$aksi = $_GET['aksi'];
	if($aksi == "update"){
		$dbase->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit'],
					   $_POST['jenis_buku']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
	}elseif($aksi == "tambah"){
		$dbase->input($_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit'],$_POST['jenis']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
	}elseif($aksi == "cari"){?>
		<div class="panel panel-primary">
			<div class="panel-heading">Data buku perpustakaan</div>
			<div class="panel-body">
				<div class="col-md-12">
					Hasil pencarian : <b> <?php echo $_POST['keyword'];?>...</b><br/><br/>
					<div class="table-responsive">
						<table border="1" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Judul</th>
									<th>Pengarang</th>
									<th>Penerbit</th>
									<th>Tahun Terbit</th>
									<th>Jenis Buku</th>
								</tr>
							</thead>
							<?php
							$no = 1;
							foreach($dbase->cari($_POST['keyword']) as $d){?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $d['judul'];?></td>
									<td><?php echo $d['pengarang'];?></td>
									<td><?php echo $d['penerbit'];?></td>
									<td><?php echo $d['tahunTerbit'];?></td>
									<td><?php echo $d['jenis_buku'];?></td>
								</tr>
						<?php }
						// end table
						echo "</table>"; 
						// end foreach
						}
						?>					
					<a href="tampil.php">
						<button type="button" class="btn btn-default" style="margin-left:35.7em;">Kembali</button>
					</a>
					<!-- end table responsiv -->
					</div>
				<!-- end col-12 -->
				</div>
			<!-- end panel-body -->
			</div>
		<!-- end panel-primary -->
		</div>
</body>
</html>