<?php 
try{
// ------- Connexion à Mysql ------- //
$db = new PDO(
    'mysql:host=localhost;dbname=we_love_food;charset=utf8',
    // id (ne pas faire ça en prod)
    'root',
    // mp (ne pas faire ça en prod)
    'root',);
}
// En cas d'erreur, PDO renvoie ce qu'on appelle une exception,
// qui permet de « capturer » l'erreur et d'arrêter le processus.
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

// ------- Ecriture de la requête ------- //
$sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// Préparation de la requête
// $insertRecipe contient quelque chose d'inexploitable directement par php car c'est : un objet PDOStatement. Du coup on "->prepare" la future requête sql afin quelle soit exploitable.
?>