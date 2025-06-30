<?php session_start();
require_once(__DIR__ . '/functions.php');
session_unset(); // On vide les variables de session
// On détruit la session
session_destroy();
// On redirige vers la page d'accueil
redirectToUrl('index.php');
?>