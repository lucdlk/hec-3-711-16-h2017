<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Je fait l'ajout dans la BD";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="post">
    <input type="text" name="nomFamille"/>
    <input type="submit" value="Submit"/>
</form>


</body>
</html>