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
			mysql_query("INSERT INTO buku VALUES ('$judul','$pengarang','$penerbit','$tahunTerbit','$jenis','')");
			echo "Data berhasil ditambahkan !<br/>";
			?><a href='tampil.php' style='text-decoration:underline;'>kembali ke beranda</a><?php
		}
		// bila operator yang login maka tidak ada fitur ...
		function tampilkan_operator(){
			//query untuk menampilkan data
			$query = "SELECT *FROM buku";
			$result = mysql_query($query);	

			while($d = mysql_fetch_array($result)){
				$hasil[] = $d;
			}	
			return $hasil;
		 } 
		 function get_nama_op(){
		 	$q = "SELECT nama from users WHERE username = '$_SESSION[operator]'";	
		 	$query = mysql_query($q);

		 	while($data = mysql_fetch_array($query)){
		 		$result[] = $data;
		 	}
		 	return $result;
		 }
		// bila admin yang login maka terdapat fitur ...
		function tampilkan_admin(){
			//query untuk menampilkan data
			$query = "SELECT *FROM buku";
			$result = mysql_query($query);	

			while($d = mysql_fetch_array($result)){
				$hasil[] = $d;
			}	
			return $hasil;
		}
		function get_nama_admin(){
		 	$q = "SELECT nama from users WHERE username = '$_SESSION[admin]'";	
		 	$query = mysql_query($q);

		 	while($data = mysql_fetch_array($query)){
		 		$result[] = $data;
		 	}
		 	return $result;
		 }	
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
