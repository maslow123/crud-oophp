<?php
	include_once 'db.php';
	
	//parameter koneksi mysql
	$host = "localhost";
	$user = "root";
	$pass = "";
	$mydb = "belajar";
	//instans objek database
	$db = new database($host,$user,$pass,$mydb);
	//koneksi database via method
	$db->connectMySQL();

    class User{
    	// proses login
    	function cek_login($username,$password){
    		@session_start();
    		$query = mysql_query("SELECT *FROM users WHERE username='$username' and password='$password'");
    		$result = mysql_fetch_array($query);
    		$cek = mysql_num_rows($query);

    		if($cek > 0){

    			$_SESSION['username'] = $username;
   					echo "<script>alert('login berhasil');
   								  document.location.href='home.php'
   						  </script>";   				
    		}else{
    			echo "<script>alert('Login gagal cek username dan password anda !');</script>";
    		}
   		 }
	}
