<?php
$previsions = [
    'demain' => [
        'temperature' => -8,
        'pdp' => 0.7
    ],
    'apresdemain' => [
        'temperature' => -3,
        'pdp' => 0
    ],
    'danstroisjours' => [
        'temperature' => 0,
        'pdp' => .5
    ]
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table>
    <?php foreach ($previsions as $prevision) { ?>
        <tr>
            <td><?php var_dump($prevision['temperature']); ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>