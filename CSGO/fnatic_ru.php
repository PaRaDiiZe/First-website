<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3-equipe.php');
include('include/data_base.php');

echo $twig->render('categorie3.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Fnatic',
    'tableau_li'=>$fnatic_ru,
    'equipe'=>$fnatic1_ru,
    'youtube'=>'https://www.youtube.com/embed/gryNDp6brgM',
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'membre'=>'Члены',
    'Historique'=>'Исторический',
    'tab'=>$langue_ru,
]);
