<?php
include('include/twig.php');
$twig=init_twig();

include('include/data_base.php');
include('include/data_accueil.php');


echo $twig->render('accueil.twig', [
    'titre'=>'Accueil',
    'tableau'=>$menu_ru,
    'ac'=>$acceuil_ru,
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'tab'=>$langue_ru,
    
]);


?>