<?php

/**
 * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
 * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
 * di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
 *
 */

$matches = [
    [
        'team1' => 'Allianz Pallacanestro',
        'team2' => 'A|X Armani Exchange',
        'point_team_1' => 70,
        'point_team_2' => 40,
    ],
    [
        'team1' => 'Banco di Sardegna',
        'team2' => 'Bertram Derthona Basket',
        'point_team_1' => 60,
        'point_team_2' => 55,
    ],
    [
        'team1' => 'Carpegna Prosciutto',
        'team2' => 'Dolomiti Energia',
        'point_team_1' => 20,
        'point_team_2' => 40,
    ],
    [
        'team1' => 'Fortitudo Kigili',
        'team2' => 'Germani Brescia',
        'point_team_1' => 10,
        'point_team_2' => 70,
    ]
];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-1</title>
</head>

<body>
    <h1>php-snacks-1</h1>

    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <li> <?php echo $matches[$i]['team1'] . '-' . $matches[$i]['team2']; ?> |
                <?php echo $matches[$i]['point_team_1'] . '-' . $matches[$i]['point_team_2']; ?></li>
        <?php } ?>
    </ul>
</body>

</html>