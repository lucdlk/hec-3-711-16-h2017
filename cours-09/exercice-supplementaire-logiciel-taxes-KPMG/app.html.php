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
        <div class="col-md-6 col-md-offset-3">

            <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>

                <?php include('form.html.php'); ?>

            <?php } else { ?>
                <div class="alert alert-success" role="alert">
                    Merci d'avoir utilisé le formulaire de soumissions de factures.
                    Le montant total de cette facture est <?php echo round($montantTotal, 2); ?>$.
                </div>

                <?php if($montantTotal > 100) { ?>
                    <div class="alert alert-warning" role="alert">
                        Une preuve de paiement devra être fournie en version électronique ou papier.
                    </div>
                <?php } ?>
            <?php }?>

        </div>
    </div>
</div>

</body>
</html>