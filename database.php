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
		function input($judul,$penerbit,$pengarang,$tahunTerbit,$jenis){
			mysql_query("INSERT INTO buku VALUES ('','$judul','$pengarang','$penerbit','$tahunTerbit','$jenis')");
			echo "Data berhasil ditambahkan !<br/>";
			?><a href='tampil.php' style='text-decoration:underline;'>kembali ke beranda</a><?php
		}
		function tampilkan(){
			?>
			<div class="panel panel-primary">
				<div class="panel-heading">Data buku perpustakaan</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="table-responsive">
							<form action="proses.php?aksi=cari" method="post">										
								<div class="col-sm-10" style="margin-left:-14px;">
									<input class="form-control" placeholder=" cari judul buku.." type=" text" name="keyword">
								</div>
								<button class="btn btn-success" type="submit" style="margin-left:-14px;">Cari</button>
							</form>
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
										else{
											$i = 1;
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
																<button type='button' class='btn btn-default btn-xs'>
																	<span class='glyphicon glyphicon-pencil'></span>
																</button>
															</a>
															"?>
															<a href="<?php echo $_SERVER['PHP_SELF']?>?op=del&id=<?php echo $data['id']?>" style='text-decoration:none;' onclick="return confirm('Yakin hapus?')">
																<button type='button' class='btn btn-danger btn-xs'>
																	<span class='glyphicon glyphicon-remove'></span>
																</button>
															</a>
														<?php
														"</td>
													</tr>";
												$i++;
											// end while
											}
										// end else
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
		function cari($keyword){
			$query = "SELECT * FROM buku WHERE judul like '%".$keyword."%'";
			$result = mysql_query($query);
			if(mysql_num_rows($result)==0){
				echo "Data tidak ada ! Harap masukkan kata kunci dengan benar !";
			}
			else{
				while($data = mysql_fetch_array($result)){
					$hasil[] = $data;
				}			
				return $hasil;
			}
		}				
	}
// Location : ../../OOPHP/kasus02-class.php
