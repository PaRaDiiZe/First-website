<?php
include('include/twig.php');
$twig=init_twig();

include('include/data_base.php');
include('include/data_accueil.php');


echo $twig->render('accueil.twig', [
    'titre'=>'Accueil',
    'tableau'=>$menu,
    'ac'=>$accueil,
    'acceuil'=>'Acceuil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'tab'=>$langue,
]);

?>