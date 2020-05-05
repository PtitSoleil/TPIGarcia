<?php
/*
 * Nom du projet : TPIGarcia
 * Nom du fichier : login.php
 * Auteur : Adar Güner
 * Date : 05.05.2020
 */

require_once __DIR__ . '/server/database.php';

 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
 $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="m-auto w-50">
            <h2>Connexion</h2>
            <form>
                <div class="form-group">
                    <label for="email">Adresse mail :</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" name="login" class="btn btn-primary">Se connecter</button>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>