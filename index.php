<?php
require 'vendor/autoload.php';
$titel="acceuil";
require 'config/database.php';
require 'config/mets.php';

$produits = afficher();

require 'partials/_header.php';
?>


<?php

require_once 'views/_index.php'
?>


<?php require  'partials/_footer.php'; ?>