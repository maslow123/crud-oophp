<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>
<?php
	include 'config/config.php';
	
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
							<!-- end foreach -->
						<?php }
						// end table
						echo "</table>"; 
						?>
						<a href="tampil.php">
							<button type="button" class="btn btn-default" style="margin-left:35.7em;">Kembali</button>
						</a>					
					<!-- end table responsive -->
					</div>
				<!-- end col-md -->
				</div>
			<!-- end panel-body -->
			</div>
		<!-- panel primary -->
		</div><?php				

	}elseif($aksi == "cari-operator"){?>
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
						 	<!-- end foreach -->
						<?php }
						// end table
						echo "</table>"; 
						?>
						<a href="index.php">
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
	<?php } ?>
</body>
</html>