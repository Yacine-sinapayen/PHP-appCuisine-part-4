<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <div class="container">
        <!-- Formulaire de connexion -->
        <?php include_once('login.php'); ?>
        <h1>Site de Recettes !</h1>

        <!-- Plus facile à lire -->
        <!-- Je boucle sur mes recettes afin de les afficher -->
        <?php foreach (get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <!-- Titre des recettes -->
                <h3>
                    <a href="./recipes/read.php?id=<?php echo ($recipe['recipes_id']); ?>">
                        <?php echo ($recipe['title']); ?>
                    </a>
                </h3>

                <!-- Étapes recettes -->
                <div>
                    <?php echo ($recipe['recipe']); ?>
                </div>
                <!-- Auteur de la rectte  -->
                <i>
                    <?php echo (display_author($recipe['author'], $users)); ?>
                </i>

                <!-- Je vérifie si l'utilisateur est connecté pour lui donner accés à la modification et la supression d'nue recette -->
                <?php if (isset($loggedUser) && $recipe['author'] === $loggedUser['email']) : ?>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item">
                            <a class="link-warning" href="./recipes/update.php?id=<?php echo ($recipe['recipe_id']); ?>">Modifier l'article</a>
                        </li>

                        <li class="list-group-item">
                            <a class="link-warning" href="./recipes/delete.php?id=<?php echo ($recipe['recipe_id']); ?>">Modifier l'article</a>
                        </li>
                    </ul>
                <?php endif ?>
            </article>
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>