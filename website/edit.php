<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<?php
	include 'config/config.php';
	?>	
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Buku</div>
		<div class="panel-body">		
			<div class="row">	
				
   				<form class="col s12" action="proses.php?aksi=update" method="post">
   					<?php foreach($dbase->edit($_GET['id']) as $d):?>
					<div class="row">
						<div class="input-field col s7">
							<input type="hidden" name="id" value="<?php echo $d['id'];?>">
							<input value="<?php echo $d['judul'];?>"id="judul" type="text" class="validate" name="judul" required>
							<label for="judul">Judul</label>
						</div>							    
						<div class="input-field col s7">
							<input value="<?php echo $d['pengarang'];?>" id="pengarang" type="text" class="validate" name="pengarang" required>
							<label for="pengarang">Pengarang</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s7">
							<input value="<?php echo $d['penerbit'];?>" id="penerbit" type="text" class="validate" name="penerbit" required>
							<label for="penerbit">Penerbit</label>
						</div>
						<div class="input-field col s5">							  
							<button type="submit" class="waves-effect waves-light btn">Simpan</button>
							<a href="tampil.php" class="waves-effect waves-light btn">Batal</a>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s7">
							<input value="<?php echo $d['tahunTerbit'];?>" id="tahun_terbit" type="text" class="validate" name="tahunTerbit" required>
							<label for="tahun_terbit">Tahun Terbit</label>
						</div>
					</div>
					<div class="row">										
						<label class="col s7">Jenis Buku</label>
							<select name="jenis_buku" class="browser-default" required>								
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
    			</form>
    		<!-- end row -->
 			</div>
 			<?php endforeach; ?>
		<!-- end form-group -->
		</div>
	<!-- end col-md -->
	</div>
</body>
</html>
	