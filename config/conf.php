<?php
	include 'config/db.php';
	
	//parameter koneksi mysql
	$host = "localhost";
	$user = "root";
	$pass = "";
	$mydb = "belajar";
	//instans objek database
	$db = new konek ($host,$user,$pass,$mydb);
	//koneksi database via method
	$db->connect();

    class User{
    	// proses login
    	function cek_login($username,$password){
        @session_start();
        $query = mysql_query("SELECT *FROM users WHERE username='$username' and password='$password'");
        $result = mysql_fetch_array($query);
        $cek = mysql_num_rows($query);

        $q = mysql_query("SELECT level FROM users WHERE username='$username'");
        $akun = mysql_fetch_array($q);
        // cek, jika session ada maka akan menjalani kondisi kedua
        if($cek > 0){
          // cek jika level adalah operator maka dialihkan ke halaman index
          if($akun['level'] == "operator"){
           
              $_SESSION['username'] = $username;
              echo "<script>alert('Hai $username, kamu login sebagai operator !');
                      document.location.href='website/index.php'
                    </script>";                
          //  jika level adalah admin maka dialihkan ke halaman tampil        
          }elseif($akun['level'] == "admin"){

              $_SESSION['username'] = $username;
              echo "<script>alert('Hai $username, kamu login sebagai admin !');
                      document.location.href='website/tampil.php'
                    </script>";   
          }
        // apabila tidak ada session, maka akan mendirect kehalaman login .
        }else{
          echo "<script>alert('Login gagal cek username dan password anda !');</script>";
        }
     }

      function bacaUser($username){
        $query = mysql_query("SELECT nama from users where username='$username'");

        while($data = mysql_fetch_array($query)){
          $result[] = $data;
        }    
        return $result;
	     }

      function logout(){
         session_destroy();
      }
}