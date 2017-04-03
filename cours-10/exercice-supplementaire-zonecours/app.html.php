<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <?php include('alerte-qte-restante.html.php'); ?>
            <hr>

            <?php if($qtePlacesRestantes > 0) { ?>
                <?php include('form.html.php'); ?>
                <hr>
            <?php } ?>

            <?php include('liste-etudiants.html.php'); ?>

        </div>
    </div>
</div>
</body>
</html>