<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1-jeux.php');
include('include/data_base.php');

echo $twig->render('categorie1.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Counter Strike : Nexon',
    'cs'=> $cs_n_ru,
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'tab'=>$langue_ru,
]);
