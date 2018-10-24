<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Buku</div>
		<div class="panel-body">		
			<div class="row">	
				
   				<form class="col s12" action="proses.php?aksi=tambah" method="post">
					<div class="row">
						<div class="input-field col s7">
							<input placeholder="Judul buku" id="judul" type="text" class="validate" name="judul" required>
							<label for="judul">Judul</label>
						</div>							    
						<div class="input-field col s7">
							<input id="pengarang" type="text" class="validate" name="pengarang" required>
							<label for="pengarang">Pengarang</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s7">
							<input id="penerbit" type="text" class="validate" name="penerbit" required>
							<label for="penerbit">Penerbit</label>
						</div>
						<div class="input-field col s5">							  
							<button type="submit" class="waves-effect waves-light btn">Simpan</button>
							<a href="tampil.php" class="waves-effect waves-light btn">Batal</a>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s7">
							<input id="tahun_terbit" type="text" class="validate" name="tahunTerbit" required>
							<label for="tahun_terbit">Tahun Terbit</label>
						</div>
					</div>
					<div class="row">							        
						<div class="input-field col s7">							      		
							<select name="jenis" class="browser-default" required>
							    <option value="" disabled selected>Jenis Buku</option>
								<option value="Text Book">Text Book</option>
								<option value="Majalah">Majalah</option>
								<option value="Tutorial">Tutorial</option>
							</select>							  								
						</div>											       
					</div>							   
    			</form>
    		<!-- end row -->
 			</div>
		<!-- end form-group -->
		</div>
	<!-- end col-md -->
	</div>
</body>
</html>
	