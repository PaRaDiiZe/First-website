<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3-equipe.php');
include('include/data_base.php');

echo $twig->render('categorie3.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'NaVi',
    'tableau_li'=>$navi_ru,
    'equipe'=>$navi1_ru,
    'youtube'=>'https://www.youtube.com/embed/5QNyWMckXkQ',
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'membre'=>'Члены',
    'Historique'=>'Исторический',
    'tab'=>$langue_ru,
]);

?>