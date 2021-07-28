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



require 'partials/_header.php';
?>

<section class="login py-5">
    <div class="container py-5">
        <div class="row">
            <h1 class="text-center">connection</h1>
            <form method="post" action="" class="">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">user</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control"  name="username" autocomplete="off">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="post">Sign in</button>
            </form>
        </div>
    </div>
</section>





