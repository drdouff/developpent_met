<?php
session_start();
require 'config/database.php';
if (!$_SESSION['password']){
    header('location: login.php');
}

require 'config/mets.php';



require 'partials/_header_da.php';
?>




<?php require 'views/_dashbord.php';





?>





