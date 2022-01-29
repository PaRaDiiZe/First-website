<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data_base.php');
include('include/data_form.php');

echo $twig->render('accueil.twig', [
    'tableau'=>$menu,
    'titre'=>'Contact',
    'acceuil'=>'Accueil',
    'contact'=>'Contact',
    'url_1'=>'accueil.php',
    'url_2'=>'contact.php',
    'form'=>$form,
    'tab'=>$langue,

]);
