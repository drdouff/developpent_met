<?php
session_start();
require 'config/database.php';
if (!$_SESSION['password']){
    header('location: login.php');
}

require 'config/mets.php';
$produits = afficher();


require 'partials/_header_da.php';
?>




<?php require 'views/_dashbord.php';


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





