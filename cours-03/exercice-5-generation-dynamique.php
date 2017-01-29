<?php



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        th, td {
            border: 1px solid black;
        }
    </style>

</head>
<body>
<table>
    <thead>
    <tr>
        <th>
            Température en F
        </th>
        <th>
            Température en C (convertie)
        </th>
    </tr>
    </thead>
    <tbody>
    <?php for ($tempF = -50; $tempF <= 50; $tempF = $tempF + 5) { ?>
        <?php $tempC = round(($tempF - 32) * 5/9, 2); ?>
        <tr>
            <td><?php echo $tempF; ?>F</td>
            <td><?php echo $tempC; ?>C</td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>