<?php



function ajouter($titre, $image, $description, $region)
{
       if (require('database.php')){
           $db =new PDO('mysql:host=localhost;dbname=culinaire', 'root', '');
           $reqm = $db->prepare("INSERT INTO met_culinaires (Nom_mets_cul,image_met,description,regions) values ('$titre', '$image', '$description', '$region')");

           $reqm->execute(array($titre, $image, $description, $region));
           $reqm->closeCursor();
       }
}


function afficher(){

    if (require('database.php')){
        $db =new PDO('mysql:host=localhost;dbname=culinaire', 'root', '');
        $reqm = $db->prepare('SELECT * FROM met_culinaires ORDER BY CODE_METS_CUL DESC ');
        $reqm->execute();
        $data = $reqm->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $reqm->closeCursor();

    }
}


function suprime($id){

    if (require('database.php')){
        $db =new PDO('mysql:host=localhost;dbname=culinaire', 'root', '');
        $reqm = $db->prepare("DELETE FROM met_culinaires where CODE_METS_CUL=?");

        $reqm->execute(array($id));

    }
}