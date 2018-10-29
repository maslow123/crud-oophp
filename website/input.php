
<html>
<head>
	<link rel="stylesheet" href="css/materialize.css">	
	<!-- 
		CSS ONLINE -->	
	<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- 
		JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <style>
    	.logo{
    		font-size:40px;
    	}
    </style>
</head>
<body>
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
		<form class="col s12" action="proses.php?aksi=tambah" method="post">
			<div class="row">
				<div class="input-field col">
					<i class="material-icons logo">assignment</i>
				</div>
				<div class="input-field col s5">
					<input placeholder="Judul buku" id="judul" type="text" class="validate" name="judul" required>
					<label for="judul">Judul</label>
				</div>						
				<div class="input-field col">
					<i class="material-icons logo"">face</i>
				</div>	    
				<div class="input-field col s5">
					<input id="pengarang" type="text" class="validate" name="pengarang" required>
					<label for="pengarang">Pengarang</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col">
					<i class="material-icons logo">account_balance</i>
				</div>
				<div class="input-field col s5">
					<input id="penerbit" type="text" class="validate" name="penerbit" required>
					<label for="penerbit">Penerbit</label>
				</div>
				<div class="input-field col">
					<i class="material-icons logo">calendar_today</i>
				</div>
				<div class="input-field col s5">
					<input id="tahun_terbit" type="text" class="validate" name="tahunTerbit" required>
					<label for="tahun_terbit">Tahun Terbit</label>
				</div>
				<div class="input-field col s10" style="padding-left: 38em;">
					<i class="material-icons logo">description</i>
					<label  style="padding-left: 40em;">Jenis Buku</label>
				</div>
			</div>
			<div class="row">	
				<div class="input-field col s12">
					<select name="jenis" class="browser-default" style="text-align: center;">
						<option disabled selected></option>							    
						<option value="Text Book">Text Book</option>
						<option value="Majalah">Majalah</option>
						<option value="Tutorial">Tutorial</option>
					</select>							  
				</div>		
			</div>		
			<div class="row">
					<div class="center">							  
					<button type="submit" class="waves-effect waves-light btn">Simpan</button>
					<a href="tampil.php" class="waves-effect waves-light btn">Batal</a>
				</div>
			</div>
    	</form>
    <!-- end row -->
 	</div>
</body>
</html>
	