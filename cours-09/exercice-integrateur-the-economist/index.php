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

    <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4>2. Payment information</h4>
                <hr>
                <h4>Delivery address</h4>

                <?php include('form.html.php'); ?>
            </div>
        </div>

    <?php } else { ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <?php include('alert-thank-you.html.php'); ?>
            </div>
        </div>

    <?php }?>

</div>

</body>
</html>