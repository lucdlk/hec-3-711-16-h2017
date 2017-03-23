<?php

echo $_SERVER['REQUEST_METHOD'];
var_dump($_SERVER);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php if($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
    <form method="post">
        <label for="name">Votre nom: </label>
        <input type="text" name="name"/>
        <input type="hidden" name=""/>
        <input type="date" name="DOB"/>
        <input type="password" name="password"/>
        <input type="submit" value="Submit"/>
    </form>
<?php } else { ?>
    <div class="alert alert-success">
        Le formulaire a été soumis avec succès.
    </div>
<?php } ?>
</body>
</html>