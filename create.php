<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une recette</title>
    <link
        href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<?php include_once('./header.php')?>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <h1>Ajouter une recette</h1>
        <form action="<?php echo($rootUrl . 'appCuisine-part-4/recipes/post_create.php'); ?>" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label"> Titre de la recette</label>
                <input type="text" class="form-controm" id="title" aria-describedby="title">
                <div id="title-help" class="form-text">Choisissez un titre percutant !</div>
            </div>

            <div class="mb-3">
                <label for="recipe" class="form-label"> Description de la recette</label>
                <textarea class="form-control" placeholder="Seulement du contenu vous appartenant"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br>
    </div>
    <?php include_once('./footer.php'); ?>
</body>
</html>