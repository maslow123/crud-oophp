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
		function addBuku($judul,$pengarang,$penerbit,$tahunTerbit){
			$query = "INSERT INTO buku(judul,pengarang,penerbit,tahunTerbit) VALUES
									  ('$judul','$pengarang','$penerbit','$tahunTerbit')";
			$result = mysql_query($query);
			if($result){echo "Data berhasil ditambahkan !";}
			else{echo "Data gagal ditambahkan !";}
		}
		// jika lewat form
		function input($judul,$penerbit,$pengarang,$tahunTerbit){
			mysql_query("INSERT INTO buku VALUES ('','$judul','$pengarang','$penerbit','$tahunTerbit')");
			echo "Data berhasil ditambahkan !<br/>";
			?><a href='tampil.php' class="btn btn-primary"><span class="glyphicon glyphicon-plus">kembali ke beranda</span></a><?php
		}
		function tampilkan(){
			?>
			<div class="panel panel-primary">
				<div class="panel-heading">Data buku perpustakaan</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="table-responsive">
							<a href='input.php' style="text-decoration:none;">
								<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
							</a><br/><br/>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Tahun Terbit</th>
										<th>Opsi</th>
									</tr>
								</thead>
								<tbody>
									<?php
										//query untuk menampilkan data
										$query = "SELECT *FROM buku";
										$result = mysql_query($query);
						
										$i = 1;
										while($data = mysql_fetch_array($result)){
											echo"<tr>
													<td>".$i."</td>
													<td>".$data['judul']."</td>
													<td>".$data['pengarang']."</td>
													<td>".$data['penerbit']."</td>
													<td>".$data['tahunTerbit']."</td>
													<td><a href='edit.php?id=".$data['id']."&aksi=edit' style='text-decoration:none;'>
															<button type='button' class='btn btn-default btn-xs'>
																<span class='glyphicon glyphicon-pencil'></span>
															</button>
														</a>
														"?>
														<a href="<?php echo $_SERVER['PHP_SELF']?>?op=del&id=<?php echo $data['id']?>" 
															style='text-decoration:none;' onclick="return confirm('Yakin hapus?')">
															<button type='button' class='btn btn-danger btn-xs'>
																<span class='glyphicon glyphicon-remove'></span>
															</button>
														</a>
														<?php
													"</td>
												</tr>";
												$i++;
										}
										echo "</table>";?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
		<?php } 
		function hapus($id){
			$query = "DELETE FROM buku WHERE id='$id'";
			$result= mysql_query($query);
			
			if($result){echo"Data ID ".$id." berhasil dihapus<br/>";}
			else{echo"Data gagal dihapus !";}			
		}
		function edit($id){
			$query = "SELECT *FROM buku WHERE id='$id'";
			$result = mysql_query($query);
			
			while($data = mysql_fetch_array($result)){
				$hasil[] = $data;
			}
			return $hasil;
		}
		function update($id,$judul,$pengarang,$penerbit,$tahunTerbit){
			$query = "UPDATE buku SET judul = '$judul',
									  pengarang = '$pengarang',
									  penerbit = '$penerbit',
									  tahunTerbit = '$tahunTerbit' WHERE id='$id'";
			mysql_query($query);
			echo "Data buku sudah di ubah !<br/>";
			echo "<a href='tampil.php'>Kembali ke beranda!</a>";
		}
	}
// Location : ../../OOPHP/kasus02-class.php