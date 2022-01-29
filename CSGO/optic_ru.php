<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3-equipe.php');
include('include/data_base.php');

echo $twig->render('categorie3.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Optic',
    'tableau_li'=>$optic_ru,
    'equipe'=>$optic1_ru,
    'youtube'=>'https://www.youtube.com/embed/yQvfb0gPxl4',
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'acceuil_ru.php',
    'url_2'=>'contact_ru.php',
    'membre'=>'Члены',
    'Historique'=>'Исторический',
    'tab'=>$langue_ru,
]);
