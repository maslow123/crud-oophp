<?php
    error_reporting(0);
    session_start();
    include "conf.php";
    // instance objek user
    $users = new User();
    
    $username= $_POST['username'];
    $password= $_POST['password'];

    if(isset($_POST['login'])){
        $users->cek_login($username,$password);
    }elseif(isset($_POST['batal'])){
        echo "<script>document.location.href='../'</script>";
    }
    ?>
    <!DOCTYPE html>
    <html>
        <body>
            <form method="post">
                <table width="300" align="center">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="login" value="login"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="batal" value="batal"></td>
                    </tr>


