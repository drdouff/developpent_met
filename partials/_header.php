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

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <!-- style personalise -->
    <link rel="stylesheet" href="assets/css/css2.css">

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