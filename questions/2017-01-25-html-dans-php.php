<?php

/**
 * Je me posais une question concernant l'utilisation des balises (pour l'exercice
 * intégrateur). Dans mon cas, j'ai utilisé seulement une balise PHP en y insérant
 * mon IF et mon ELSE. Le problème c'est que je dois par la suite mettre tout mon
 * HTLM entre guillemets afin qu'il puisse apparaître à l'écran. Dans votre corrigé,
 * j'ai vu que vous aviez utilisé plusieurs balises PHP en prenant soin de laisser
 * le HTLM en dehors de ces balises.
 *
 *
 * Q. Y-a-t-il une meilleure façon que l'autre étant donné qu'il donne le même résultat ?
 * R. Ça dépend... s'il y a plusieurs lignes de HTML, il serait préférable d'utiliser
 * une balise de fermeture afin d'isoler le HTML, cela risque de rendre le code plus
 * clair (moins de concaténation, moins de risques d'avoir besoin de l'échappement \).
 * Par contre, si vous optez malgré tout pour du HTML à l'intérieur de guillemets
 * (ce qui implique un echo), assurez-vous que l'indentation est claire pour le
 * lecteur.
 *
 *
 * Q. Est-ce que ma technique de travail pourrait me causer des problèmes dans le futur ?
 * R. Des problèmes non, mais peut-être un peu plus de difficulté à conserver le code
 * clair.
 */

?>

<?php

$estConnecte = true;
$nom = 'daniel';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice intégrateur - cours 2</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Link</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Bienvenue au cours</a></li>
                <?php
                if ($estConnecte) {
                    echo '<a href="">Lien vers facebook</a>';
                } else {
                    echo '<li><a href="#">Veuillez vous connecter</a></li>';
                }
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- Latest compiled and minified jQuery library -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>