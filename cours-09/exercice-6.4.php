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
        <form method="post">
            <div class="form-group">
                <label for="montant">Montant:</label>
                <input class="form-control" type="text" name="montant" id="montant"/>
            </div>

            <div class="form-group">
                <label for="name">Nom:</label>
                <input class="form-control" type="text" name="name"/>
            </div>

            <input type="hidden" value="232378" name=""/>

            <input class="btn btn-primary btn-block" type="submit" value="Envoyer le virement" name=""/>
        </form>
    <?php } else { ?>
        <div class="alert alert-info">
            Merci <?php echo $_POST['name'] ?>, Le virement de <?php echo $_POST['montant']?>$
            a bien été effectué.
        </div>
    <?php } ?>
</div>
</body>
</html>