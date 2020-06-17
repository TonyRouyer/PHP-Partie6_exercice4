<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 4</title>
    </head>
    <body>
        <a href="index.php?language=PHP&server=LAMP">Clique ici !</a>
        <?php 
            if (isset($_GET['language']) && isset($_GET['server'])) {
                echo '<p>Le serveur ' . $_GET['server'] . ' utilise ' . $_GET['language'] . '</p>';
            }else {
                echo 'il faut renseignier un erveur et un language';
            }
        ?>
    </body>
</html>