<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">
        <?php foreach ($souliersCrossfit as $soulier) { ?>
            <div class="col-md-4">
                <img class="img-responsive" src="<?php echo $soulier->path; ?>">
                <b><?php echo $soulier->description; ?></b>
                <br>
                <span class="text-muted"><?php echo $soulier->category; ?></span>
                <br>
                C$ <?php echo $soulier->prix; ?>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>