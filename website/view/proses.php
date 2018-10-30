<html>
	<head>
		<link rel="stylesheet" href="../css/materialize.css">		
		<link href="../../font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
<body>
<?php
	include '../models/config.php';
	
	$aksi = $_GET['aksi'];
	if($aksi == "update"){
		$dbase->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit'],
					   $_POST['jenis_buku']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
	}elseif($aksi == "tambah"){
		$dbase->input($_POST['judul'],$_POST['pengarang'],$_POST['penerbit'],$_POST['tahunTerbit'],$_POST['jenis']);
		echo "<a href='tampilkan.php>Kembali ke beranda</a>";
		
	}elseif($aksi == "cari"){?>
			<form method="post">
				<nav>
					<div class="nav-wrapper blue"">
						Data buku perpustakaan
						<div class="right">
							<a href="tampil.php">
								<button type="button" class="blue"style="border:0;margin-left:40em;color:white;cursor: pointer;">
									<i class="material-icons" style="font-size:40px;">navigate_beforenavigate_before</i>
								</button>
							</a>
						</div>
					</div>				
				</nav>
			<div class="row">
				<div class="input-field col s3">
					Hasil pencarian : <b> <?php echo $_POST['keyword'];?>...</b>
				</div>
				<div style="margin-left: 60em;">
					<div class="input-field col s9">
						<input type="text" name="keyword" placeholder="masukkan judul buku.."/>
					</div>
					<div class="input-field col s2">
						<button type="submit" class="waves-effect waves-light btn blue">
							<i class="material-icons">search</i>
						</button>
					</div>
				</div>
			</div>
			</form>
			<table class="responsive-table centered">
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
					if(is_null($dbase->cari($_POST['keyword']))){
						echo "<tr><td colspan='6'>Judul buku tidak ditemukan</td></tr>";
					}
					else{
						foreach($dbase->cari($_POST['keyword']) as $d):?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['judul'];?></td>
								<td><?php echo $d['pengarang'];?></td>
								<td><?php echo $d['penerbit'];?></td>
								<td><?php echo $d['tahunTerbit'];?></td>
								<td><?php echo $d['jenis_buku'];?></td>
							</tr>
						<!-- end foreach -->
						<?php endforeach;
					// end else
					}
				?>
			</table>
		<?php				
	}elseif($aksi == "cari-operator"){?>
			<form method="post">
				<nav>
					<div class="nav-wrapper blue"">
						Data buku perpustakaan
						<div class="right">
							<a href="index.php">
								<button type="button" class="blue"style="border:0;margin-left:40em;color:white;cursor: pointer;">
									<i class="material-icons" style="font-size:40px;">navigate_beforenavigate_before</i>
								</button>
							</a>
						</div>
					</div>				
				</nav>
				<div class="row">
					<div class="input-field col s3">
						Hasil pencarian : <b> <?php echo $_POST['keyword'];?>...</b>
					</div>
					<div style="margin-left: 60em;">
						<div class="input-field col s9">
							<input type="text" name="keyword" placeholder="masukkan judul buku.."/>
						</div>
						<div class="input-field col s2">
							<button type="submit" class="waves-effect waves-light btn blue">
								<i class="material-icons">search</i>
							</button>
						</div>
					</div>
				</div>
			</form>
			<table class="responsive-table centered">
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
					if(is_null($dbase->cari($_POST['keyword']))){
						echo "<tr><td colspan='6'>Judul buku tidak ditemukan</td></tr>";
					}
					else{
						foreach($dbase->cari($_POST['keyword']) as $d):?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['judul'];?></td>
								<td><?php echo $d['pengarang'];?></td>
								<td><?php echo $d['penerbit'];?></td>
								<td><?php echo $d['tahunTerbit'];?></td>
								<td><?php echo $d['jenis_buku'];?></td>
							</tr>
						<!-- end foreach -->
						<?php endforeach;
					// end else
					}
				?>
			</table>
		<?php				
	}?>
</body>
</html>