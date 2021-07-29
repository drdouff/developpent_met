<?php

session_start();
require '../config/database.php';
if (!$_SESSION['password']){
    header('location: login.php');
}

require '../config/mets.php';
$produits = afficher();




?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titel ?? 'mon site'?></title>
        <!--font awesome cdn css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <!-- bootstrap core css -->

        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <!-- style personalise -->
        <link rel="stylesheet" href="../assets/css/css2.css">

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
                        <a class="nav-link active" aria-current="page" href="../dashbord.php">Admin</a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link" href="../Admin/ajouter_mets.php">ajouter mets </a>
                    </li>
                    <li class="nav-item pe-4">
                        <a class="nav-link"href="../Admin/suprimer_met.php">Suprimer mets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




<section class="dd-banner d-flex justify-content-center align-items-center pt-5">
    <div class="container my-5 py-5">
        <div class="row">
             <div class="col-lg-5 col-md-6">
                 <form method="post">
                    <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label">titre image</label>
                       <input type="name" name="image" class="form-control" id="exampleInputEmail1" required autocomplete="off">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nom du met</label>
                <input type="texte"  name="nom" class="form-control" id="exampleInputPassword1" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">region du met</label>
                <input type="texte" name="region" class="form-control" id="exampleInputPassword1" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea class="form-control" name="desc" required></textarea>
            </div>

            <button type="submit" name="valider" class="btn btn-primary">ajouter un nouveau met</button>
        </form>
    </div>

    </div>
    </div>
</section>


 <?php
if (isset($_POST['valider'])){
    if (isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['region']) AND isset($_POST['desc']))
    {
        if (!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['region']) AND !empty($_POST['desc']))
        {

            $image = htmlspecialchars(strip_tags($_POST['image']));
            $titre = htmlspecialchars(strip_tags($_POST['nom']));
            $region = htmlspecialchars(strip_tags($_POST['region']));
            $description = htmlspecialchars(strip_tags($_POST['desc']));



            try
            {
                ajouter($titre, $image, $description, $region);

            }catch (Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }
}
 ?>