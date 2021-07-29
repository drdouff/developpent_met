<?php
session_start();
require 'config/database.php';

if (isset($_POST['post'])){
    if (!empty($_POST['username']) AND !empty($_POST['password'])){
         $user = htmlspecialchars($_POST['username']);
         $pass = htmlspecialchars($_POST['password']);

         $req = $db->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
         $req->execute(array($user,$pass));

         if ($req->rowCount() > 0){
             $_SESSION['username'] = $user;
             $_SESSION['password'] = $pass;
             $_SESSION['id'] = $req->fetch()['CODE_USER'];
             header('location: dashbord.php');

         }else{
             echo "Mot de passe au user incorrect";
         }

    }else{
        echo "veuillez completer tout les champ...";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/csslogin.css">
    <title>login</title>
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						connection
					</span>
            </div>

            <form method="post" action="" class="login100-form validate-form">
                <div class=" row mb-3 wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <div class="">
                        <input class="form-control" type="text" name="username" placeholder="Enter username" autocomplete="off">

                    </div>
                </div>

                <div class=" row mb-3 wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="">Password</span>
                    <div class="">
                        <input class="form-control" type="password" name="password" placeholder="Enter password" autocomplete="off">
                    </div>
                </div>



                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" name="post">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>



