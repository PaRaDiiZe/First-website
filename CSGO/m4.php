<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2-tableaux.php');
include('include/data_base.php');

echo $twig->render('categorie2.twig', [
    'tableau'=>$menu,
    'titre'=>'M4',
    'armes'=> $m4,
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'Historique'=>'Historique',
    'tab'=>$langue,
]);

?>
