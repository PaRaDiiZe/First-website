<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1-jeux.php');
include('include/data_base.php');

echo $twig->render('categorie1.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Counter Strike 1.6',
    'cs'=> $cs16_ru,
    'image_jeux'=> 'image/cs1.6.jpg',
    'image_lan'=> 'image/LAN_OLD.jpg',
    'lien_youtube'=> 'https://www.youtube.com/embed/KkgQkxPxJlE',
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'tab'=>$langue_ru,
    
    

]);

?>
