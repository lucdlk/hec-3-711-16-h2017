<?php

var_dump($_POST);
echo $_POST['compte']

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<form>
    <div class="form-group">
        <label for="name">Votre nom: </label>
        <input class="form-control" type="text" name="name"/>
    </div>

    <div class="form-group">
        <label for="numero">Votre numéro: </label>
        <input class="form-control" type="text" name="numero" id="numero"/>
    </div>

    <input type="hidden" name="compte" value="1234asdfasdf56" />
    <input class="btn btn-primary" type="submit" value="Submit"/>
</form>
</body>
</html>