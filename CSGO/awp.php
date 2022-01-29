<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2-tableaux.php');
include('include/data_base.php');

echo $twig->render('categorie2.twig', [
    'tableau'=>$menu,
    'titre'=>'Awp',
    'armes'=> $awp,
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'Historique'=>'Historique',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'tab'=>$langue,
    

]);
