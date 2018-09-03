<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>Exercice 1</title>
    </head>
    <body>
        <div class="container">
            <div class="justify-content-center bg-dark text-white">
                <p><?= $_SERVER['HTTP_USER_AGENT']; ?></p>
                <p><?= $_SERVER['REMOTE_ADDR']; ?></p>
                <p><?= $_SERVER['SERVER_NAME']; ?></p>
            </div>
        </div>
    </body>
</html>
