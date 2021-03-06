<?php
/* 
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo 
grigio e i PM in un rettangolo verde.*/


$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-snacks-6</title>
</head>

<body>
    <h1>php-snacks-6</h1>
    <section class="my-flex">
        <div class="box gray">
            <h2>Insegnanti</h2>
            <ul>
                <?php
                for ($i = 0; $i < count($db['teachers']); $i++) { ?>
                    <li>
                        <?php echo $db['teachers'][$i]['name'] . '-' . $db['teachers'][$i]['lastname'] . ';'; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="box green">
            <h2>PM</h2>
            <ul>
                <?php
                for ($i = 0; $i < count($db['pm']); $i++) { ?>
                    <li>
                        <?php echo $db['pm'][$i]['name'] . '-' . $db['pm'][$i]['lastname'] . ';'; ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>

</body>

</html>