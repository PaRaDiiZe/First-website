<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1-jeux.php');
include('include/data_base.php');

echo $twig->render('categorie1.twig', [
    'tableau'=>$menu,
    'titre'=>'Counter Strike 1.6',
    'cs'=> $cs16,
    'image_jeux'=> 'image/cs1.6.jpg',
    'image_lan'=> 'image/LAN_OLD.jpg',
    'lien_youtube'=> 'https://www.youtube.com/embed/KkgQkxPxJlE',
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'tab'=>$langue,
    
    

]);

?>
