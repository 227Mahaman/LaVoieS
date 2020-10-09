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
    } elseif ($p == "service") { //View Nos services
        include_once('views/service_view.php');
    } elseif ($p == "agence") { //View Agence
        include_once('views/agence_view.php');
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
