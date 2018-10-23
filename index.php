<?php
    error_reporting(0);
    session_start();
    include "config/conf.php";
    // instance objek user
    $users = new User();
    
    $username= $_POST['username'];
    $password= $_POST['password'];

    if(isset($_POST['login'])){
        $users->cek_login($username,$password);
        $users->bacaUser($username);       
    }elseif(isset($_POST['batal'])){
        echo "<script>document.location.href='../'</script>";
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Login Admin</title><meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
            <link rel="stylesheet" href="css/matrix-login.css" />
            <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
        </head>
        <body>
            <div id="loginbox"> <!-- agar box ditengah -->            
                <form method="post" class="form-vertical"> <!-- memberikan hr -->
                     <div class="control-group normal_text"> <h3>SELAMAT DATANG !</h3></div> <!-- mengatur font -->
                    <div class="control-group"> <!-- memberikan jarak antar form -->
                        <div class="controls"> <!-- mengatur lebar form -->
                            <div class="main_input_box"><!-- menyesuaikan kotak dengan form  -->
                                <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="username" type="text" placeholder="Username" required />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="password" type="password" placeholder="Password" required />
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">

                        <span class="pull-left"><input type="submit" class="btn btn-success" name="login" value="Login"></span>
                        <span class="pull-right"><input type="submit" class="btn btn-primary" name="batal" value="Batal"></span>
                    </div>
                </form>               
            </div>
        </body>
    </html>



