<?php
/* 
Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere 
lo stesso numero più di una volta */


$numberRand = [];
while (count($numberRand) < 15) {
    $num = rand(1, 200);
    if (!in_array($num, $numberRand)) {
        $numberRand[] = $num;
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-4</title>
</head>

<body>
    <h1>php-snacks-4</h1>
    <pre>
        <?php echo var_dump($numberRand) ?>
    </pre>


</body>

</html>