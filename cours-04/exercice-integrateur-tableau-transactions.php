<?php

$transactions = [
    [
        'description' => 'Sortie au Pub',
        'montant' => 19.53,
        'date' => '2017-02-01'
    ],
    [
        'description' => 'Retrait au guichet CDN',
        'montant' => 60,
        'date' => '2017-02-02'
    ],
    [
        'description' => 'Dépôt Caisse Centre',
        'montant' => 120,
        'date' => '2017-02-03'
    ]
];

// On ajoute une transaction
$transactions[] = [
    'description' => 'Achat sac à dos',
    'montant' => 63.25,
    'date' => '2017-02-03'
];

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
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Description</th>
            <th>Montant</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($transactions as $transaction) { ?>
            <tr>
                <td><?php echo $transaction['description']; ?></td>
                <td><?php echo $transaction['montant']; ?></td>
                <td><?php echo $transaction['date']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>