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
    <link rel="stylesheet" href="assets/css/css2.css">
    <title>login</title>
</head>
<body>


<nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#">Mets_kamer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item pe-4">
                    <a class="nav-link active" aria-current="page" href="../index.php">acceuil</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link" href="#">nos service</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link"href="contact.php">contact</a>
                </li>
                <li class="nav-item pe-4">
                    <a class="nav-link"href="login.php">login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>









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



