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
                    <h5>suprimer un Met</h5>
                    <label for="staticEmail2" class="visually-hidden">code_mets</label><br>
                    <input type="number" name="idproduit" class="form-control" id="staticEmail2"><br>
                    <button type="submit" name="suprimer" class="btn btn-primary">suprimer un met</button>
                </form><br>
                <?php foreach ($produits as $produit): ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= $produit->image_met  ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $produit->CODE_METS_CUL ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
    </div>
</section>


<?php

if (isset($_POST['suprimer'])){
    if (isset($_POST['idproduit']))
    {
        if (!empty($_POST['idproduit']))
        {

            $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));




            try
            {
                suprime($idproduit);

            }catch (Exception $e)
            {
                echo $e->getMessage();
            }
        }
    }
}


 ?>