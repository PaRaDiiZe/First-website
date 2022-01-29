<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1-jeux.php');
include('include/data_base.php');

echo $twig->render('categorie1.twig', [
    'tableau'=>$menu,
    'titre'=>'Counter Strike : Global Offensive',
    'cs'=> $cs_go,
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    

    

]);
