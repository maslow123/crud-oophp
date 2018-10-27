<?php
	class database{
		//properties
		private $dbHost;
		private $dbUser;
		private $dbPass;
		private $dbName;
		
		//constructor
		function __construct($a,$b,$c,$d){
			$this->dbHost = $a;
			$this->dbUser = $b;
			$this->dbPass = $c;
			$this->dbName = $d;
		}
		// method koneksi mysql
		function connectMySQL(){
			mysql_connect($this->dbHost,$this->dbUser,$this->dbPass);
				
			mysql_select_db($this->dbName);
		}
		// jika lewat form
		function input($judul,$pengarang,$penerbit,$tahunTerbit,$jenis){
			mysql_query("INSERT INTO buku VALUES ('','$judul','$pengarang','$penerbit','$tahunTerbit','$jenis')");
			echo "Data berhasil ditambahkan !<br/>";
			?><a href='tampil.php' style='text-decoration:underline;'>kembali ke beranda</a><?php
		}
		// bila operator yang login maka tidak ada fitur ...
		function tampilkan_operator(){
			$query = mysql_query("SELECT nama from users WHERE username = '$_SESSION[username]'");
			$result = mysql_fetch_array($query);
			?>
			<nav>
				<form method="post">
					<div class="nav-wrapper blue"">
						<a href="#" class="brand-logo">
							<img src="image/logo.png" width=200 height=50/>
						</a>
						<span class="pull-right">
							<i class="icon-user"></i> <?php echo $result['nama']; ?>
						 	<button type="submit" name="logout" style='background:transparent;border:0;cursor: pointer;' onclick="return confirm('Yakin ingin logout?')">
						 			<i class="fa fa-sign-out" style="font-size:20px;color:white;"></i> 
						 			<span style="color:white;">Logout</span> 
						 	</button>					 	
						</span>
					</div>
				</form>
			</nav>
			<div class="row">
				<!-- proses pengiriman form ke proses.php -->							
				<form action="proses.php?aksi=cari-operator" method="post">				
					<div class="row" style="margin-left:50em;">
						<div class="input-field col s10">									
							<input placeholder="masukkan judul buku.." type="text"  name="keyword" required>
						</div>
						<div class="input-field col s2">
							<button class="waves-effect waves-light btn-small white" type="submit">
								<i class="material-icons" style="color:black">search</i>
							</button>
						</div>
					</div>
				</form>							
				<table class="responsive-table centered">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>Jenis Buku</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//query untuk menampilkan data
							$query = "SELECT *FROM buku";
							$result = mysql_query($query);
							//cek apakah data kosong atau tidak
							if(mysql_num_rows($result)==0){
								echo "<tr><td colspan=7>Tidak ada data !</td></tr>";
							}
							//apabila data tidak kosong maka ..
							else{
								$i = 1;
								// menangkap perulangan array dari query $result
								while($data = mysql_fetch_array($result)){
									echo"<tr>
											<td>".$i."</td>
											<td>".$data['judul']."</td>
											<td>".$data['pengarang']."</td>
											<td>".$data['penerbit']."</td>
											<td>".$data['tahunTerbit']."</td>
											<td>".$data['jenis_buku']."</td>
											<td> Tersedia </td>		
										</tr>";
									$i++;
								// end while
								}
								// end else
							}?>
					</tbody>
				</table>
			<!-- end row -->
			</div>
		<!-- end method -->
		<?php } 
		// bila admin yang login maka terdapat fitur ...
		function tampilkan_admin(){
			$query = mysql_query("SELECT nama from users WHERE username = '$_SESSION[username]'");
			$result = mysql_fetch_array($query);
			?>
			<nav>
				<form method="post">
					<div class="nav-wrapper blue"">
						<a href="#" class="brand-logo">
							<img src="image/logo.png" width=200 height=50/>
						</a>
						<span class="pull-right">
							<i class="icon-user"></i> <?php echo $result['nama']; ?>
						 	<button type="submit" name="logout" style='background:transparent;border:0;cursor: pointer;' 			onclick="return confirm('Yakin ingin logout?')">
						 			<i class="fa fa-sign-out" style="font-size:20px;color:white;"></i> 
						 			<span style="color:white;">Logout</span> 
						 	</button>					 	
						</span>
					</div>
				</form>
			</nav>
			<div class="row">
				<!-- proses pengiriman form ke proses.php -->
				<form action="proses.php?aksi=cari" method="post">										
					<div class="row">
						<div class="input-field col s5">						
								<a href='input.php'>
									<button type="button" class="btn waves-effect waves-light blue">
										Tambah data<i class="material-icons right">add_box</i>
									</button>												
								</a>							
						</div>
						<div style="margin-left:60em;">
							<div class="input-field col s9">									
								<input placeholder="masukkan judul buku.." type="text"  name="keyword" required>
							</div>
							<div class="input-field col s2">
								<button class="waves-effect waves-light btn white" style="height:45px;"type="submit">
									<i class="material-icons" style="color:black;">search</i>
								</button>
							</div>
						</div>
					</div>
				</form>							
				<table class="responsive-table centered">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul</th>
							<th>Pengarang</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
							<th>Jenis Buku</th>
							<th>Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//query untuk menampilkan data
							$query = "SELECT *FROM buku";
							$result = mysql_query($query);
							//cek apakah data kosong atau tidak
							if(mysql_num_rows($result)==0){
								echo "<tr><td colspan=7>Tidak ada data !</td></tr>";
							}
							//apabila data tidak kosong maka ..
							else{
								$i = 1;
								// menangkap perulangan array dari query $result
								while($data = mysql_fetch_array($result)){
									echo"<tr>
											<td>".$i."</td>
											<td>".$data['judul']."</td>
											<td>".$data['pengarang']."</td>
											<td>".$data['penerbit']."</td>
											<td>".$data['tahunTerbit']."</td>
											<td>".$data['jenis_buku']."</td>
											<td><a href='edit.php?id=".$data['id']."&aksi=edit'
														style='text-decoration:none;'>
														<button type='button' class='btn-floating white'>
												 			<span class='fa fa-edit' style='font-size:18px;color:black;'>
												 			</span>
														</button>
												</a>"?>
												<a href="<?php echo $_SERVER['PHP_SELF']?>?op=del&id=<?php echo $data['id']?>"		   style='text-decoration:none;' onclick="return confirm('Yakin hapus?')	  ">
													<button type='button' class="btn-floating white">
														<span class='fa fa-remove' style='font-size:18px;color:black'></span>
													</button>
												</a>
												<?php
												"</td>
										</tr>";
									$i++;
								// end while
								}
							// end else
							}?>		
					</tbody>
				</table>
			</div>
		<!-- end method -->
	<?php } 
		// method hapus data 
		function hapus($id){
			$query = "DELETE FROM buku WHERE id='$id'";
			$result= mysql_query($query);
			
			if($result){echo"Data ID ".$id." berhasil dihapus<br/>";}
			else{echo"Data gagal dihapus !";}			
		}
		// method edit atau update untuk file aksi 
		function edit($id){
			$query = "SELECT *FROM buku WHERE id='$id'";
			$result = mysql_query($query);
			
			while($data = mysql_fetch_array($result)){
				$hasil[] = $data;
			}
			return $hasil;
		}
		// method edit untuk form update
		function update($id,$judul,$pengarang,$penerbit,$tahunTerbit,$jenis){
			$query = "UPDATE buku SET judul = '$judul',
									  pengarang = '$pengarang',
									  penerbit = '$penerbit',
									  tahunTerbit = '$tahunTerbit',
									  jenis_buku = '$jenis'  WHERE id='$id'";
			mysql_query($query);
			echo "Data buku sudah di ubah !<br/>";
			echo "<a href='tampil.php' style='text-decoration:underline;'>Kembali keberanda</a>";
		}
		// method pencarian buku melalui judul
		function cari($keyword){
			$query = "SELECT * FROM buku WHERE judul like '%".$keyword."%'";
			$result = mysql_query($query);
			// apabila data yang dicari tidak ada..
			if(mysql_num_rows($result)==0){
				echo "Data tidak ada ! Harap masukkan kata kunci dengan benar !";
				error_reporting(0);
			}
			// apabila data yang dicari ada isinya, maka..
			else{				
				while($data = mysql_fetch_array($result)){
					$hasil[] = $data;
				}			
				return $hasil;
			}
		}	
		function logout(){
			session_destroy();
		}			
	}
// Location : ../../OOPHP/kasus02-class.php
