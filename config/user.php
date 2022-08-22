<?php
// Ce script véirifie si l'utilisateur est connecté
// Pour cela il vérifie si un cookie ou une connexion liée à l'utilisateur existent.
if (isset($_COOKIE['LOGGED_USER']) || isset($_SESSION['LOGGED_USER'])) {
    $loggedUser = [
        'email' => $_COOKIE['LOGGED_USER'] ?? $_SESSION['LOGGES_USER'],
    ];
}else {
    throw new Exception('Il faut être authentifié pour ajouter des recettes');
}
?>