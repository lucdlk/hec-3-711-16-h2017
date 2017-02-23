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
        <div class="col-md-6 col-md-offset-2">
            <?php foreach($resultats as $resultat) { ?>
                <span style="font-size: 1.3em;">
                        <a target="_blank" href="<?php echo $resultat->lien; ?>"><?php echo $resultat->titre ?></a>
                    <?php if($resultat->estUneAnnonce()) { ?>
                        <span class="label label-warning">Annonce</span>
                    <?php } ?>
                    </span>
                <br>
                <a class="text-success" href="<?php echo $resultat->lien; ?>"><?php echo $resultat->lien ?></a>
                <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                <p>
                    <?php echo $resultat->description; ?>
                </p>
                <br>
            <?php } ?>
        </div>
    </div>

</div>

</body>
</html>