<?php

/* Démarre la session */ 
session_start();

include_once(dirname(__FILE__). '/src/models/SPDO.php');
include_once(dirname(__FILE__). '/src/models/model/CL_article.php');
include_once(dirname(__FILE__). '/src/models/mapping/CL_gestion_article.php'); 
$CL_gestion_article = new CL_gestion_article();

if (!isset($_SESSION['auth'])){
    $_SESSION['auth'] = false; 
}else {
     
}
include 'src/controller/header.php';
include 'src/controller/aside.php';
//On inclut le contrôleur s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('src/controller/' . $_GET['page'] . '.php')) {
    include 'src/controller/' . $_GET['page'] . '.php';
}else {
    include 'src/controller/accueil.php';
}
include 'src/controller/footer.php';








?>