<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/data_base.php');
include('include/data_form.php');

echo $twig->render('contact.twig', [
    'tableau'=>$menu_ru,
    'titre'=>'Contact',
    'acceuil'=>'домой',
    'contact'=>'контакт',
    'url_1'=>'accueil_ru.php',
    'url_2'=>'contact_ru.php',
    'form'=>$form_ru,
    'tab'=>$langue_ru,

]);
