<html>
<head>
	<link rel="stylesheet" href="../css/materialize.css">
	<!-- 
		CSS ONLINE -->	
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- 
		JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<?php
	include 'config/config.php';
	?>	
	<nav>
		<form method="post">
			<div class="nav-wrapper blue"">
				<a href="#" class="brand-logo">
					<img src="image/logo.png" width=200 height=50/>
				</a>
				<div class="right">
					<a href="tampil.php">
						<button type="button" class="blue"style="border:0;margin-left:40em;color:white;cursor: pointer;">
							<i class="material-icons" style="font-size:40px;">navigate_beforenavigate_before</i>
						</button>
					</a>
				</div>
			</div>
		</form>
	</nav>		
	<div class="row">	
				
   		<form class="col s12" action="proses.php?aksi=update" method="post">
   			<?php foreach($dbase->edit($_GET['id']) as $d):?>
			<div class="row">
				<div class="input-field col s6">
					<input type="hidden" name="id" value="<?php echo $d['id'];?>">
							<input value="<?php echo $d['judul'];?>"id="judul" type="text" class="validate" name="judul" required>
							<label for="judul">Judul</label>
						</div>							    
						<div class="input-field col s6">
							<input value="<?php echo $d['pengarang'];?>" id="pengarang" type="text" class="validate" name="pengarang" required>
							<label for="pengarang">Pengarang</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s6">
							<input value="<?php echo $d['penerbit'];?>" id="penerbit" type="text" class="validate" name="penerbit" required>
							<label for="penerbit">Penerbit</label>
						</div>
						<div class="input-field col s6">							  
							<input value="<?php echo $d['tahunTerbit'];?>" id="tahun_terbit" type="text" class="validate" name="tahunTerbit" required>
							<label for="tahun_terbit">Tahun Terbit</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<label style="padding-left: 40em;">Jenis Buku</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<select name="jenis_buku" class="browser-default">	
								<option value="Text Book"<?php if($d['jenis_buku'] == "Text Book")
									{echo 'selected';}?>>Text Book
								</option>
								<option value="Majalah"<?php if($d['jenis_buku'] == "Majalah")
									{echo 'selected';}?>>Majalah
								</option>
								<option value="Tutorial"<?php if($d['jenis_buku'] == "Tutorial")
									{echo 'selected';}?>>Tutorial
								</option>
							</select>		
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">							  
							<div class="center">
								<button type="submit" class="waves-effect waves-light btn">Simpan</button>
								<a href="tampil.php" class="waves-effect waves-light btn">Batal</a>
							</div>
						</div>
					</div>
 			<?php endforeach; ?>
		<!-- end form-group -->
		</div>
	<!-- end col-md -->
	</div>
</body>
</html>
	