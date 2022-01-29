<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2-tableaux.php');
include('include/data_base.php');

echo $twig->render('categorie2.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Awp',
    'armes'=> $awp_ru,
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'Historique'=>'Исторический',
    'tab'=>$langue_ru,
    

]);
