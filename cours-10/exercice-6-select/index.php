<?php

/**
 * Initialisation de la connexion à la base de données.
 * Changer 'danielparpal' pour votre nom d'utilisateur.
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=c9', 'danielparpal');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db->exec("set names utf8");

/**
 * Le script ci-dessous permet d'aller récupérer toutes les publications.
 *
 * $results est : un tableau d'objets
 */
$query = $db->query('SELECT * FROM publications');
$results = $query->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<ul class="list-group">
    <?php foreach($results as $publication) { ?>
        <li class="list-group-item">
            <?php echo $publication->description; ?>
        </li>
    <?php } ?>
</ul>
</body>
</html>