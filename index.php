<?php

session_start();
require "model/Manager.php";
if (isset($_SESSION['messages'])) {
    unset($_SESSION['messages']);
}
if (!empty($_GET['p'])) {
    extract($_GET);
    if ($p == "home") {
        include_once('views/view_home.php');
    } elseif ($p == "fikr") { //View Fikr
        include_once('views/view_fikr.php');
    } elseif ($p == "datas") { //View Datas
        include_once('views/view_datas.php');
    } elseif ($p == "annonce") { //View Article Annonce
        include_once('views/view_annonce.php');
    } elseif ($p == "oulema") { //View Oulema
        include_once('views/view_oulema.php');
    } elseif ($p == "audio") { //View Audio
        include_once('views/view_audio.php');
    } elseif ($p == "actualite") { //View Article Actualité
        include_once('views/view_actualite.php');
    } elseif ($p == "contact") { //View Contact
        if($_POST){//Envoi de mail et notification
            include_once('model/mail_nous_contacter.php');
            if(isset($_SESSION['mail']) && $_SESSION['mail'] == 0){
                $_SESSION['messages'] = "Erreur, votre email n'a pas été envoyer!";
            } elseif(isset($_SESSION['mail']) && $_SESSION['mail'] == 1){
                $_SESSION['messages'] = "Votre email a bien été envoyer!";
            }
        }
        include_once('views/view_contact.php');
    }
} else {
    include_once('views/view_home.php');
}
