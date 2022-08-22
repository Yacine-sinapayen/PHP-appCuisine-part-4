<?php
// j'ouvre une session utilisateur
session_start();

// Ce script véirifie si l'utilisateur est connecté
// include_once('./config/mysql.php');
// // Ce script gère la connexion ) ma BDD
// include_once('./config/user.php');
// include_once('./variables.php');

// var dans laquelle seront stockés mes données
$postData = $_POST;

// Vérification du formulaire soumis : si une des deux var n'existent pas
// alors j'affiche le msg d'erreur
if (!isset($_POST['title']) || !isset($_POST['recipe'])) {
    echo 'Il faut un titre et une recette pour soumettre le formulaire.';
    return;
}

$title = $_POST['title'];
$recipe = $_POST['recipe'];

// Insertion en bdd des données de notre formulaire
$insertRecipe = $mysqlClient->prepare('INSERT INTO recipe(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)');
// Je récupère les données du form soumis par l'utilisateur
$insertRecipe->execute([
    'title' => $title,
    'recipe' => $recipe,
    'author' => $loggedUser['email'],
    // par defaut les recettes sont activées
    'is_enabled' => 1,
])

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Création de recette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include_once($rootPath . '/header.php'); ?>
        <h1>Recette ajoutée avec succès !</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"> <?php echo ($title); ?> </h5>
                <p class="card-text"> <b>Email</b> : <?php echo ($loggedUser['email']); ?> </p>
                <p class="card-text"> <b>Recette</b> : <?php echo strip_tags($recipe); ?> </p>
            </div>
        </div>
    </div>
    <?php include_once($rootPath.'/footer.php'); ?>
</body>

</html>