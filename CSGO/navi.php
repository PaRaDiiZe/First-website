<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3-equipe.php');
include('include/data_base.php');

echo $twig->render('categorie3.twig', [
    'tableau'=>$menu,
    'titre'=>'NaVi',
    'tableau_li'=>$navi,
    'equipe'=>$navi1,
    'youtube'=>'https://www.youtube.com/embed/5QNyWMckXkQ',
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'membre'=>'Membres',
    'Historique'=>'Historique',
    'tab'=>$langue,
]);

?>