<?php
/* 
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo 
grigio e i PM in un rettangolo verde.*/

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-3</title>
</head>

<body>
    <h1>php-snacks-3</h1>
    <ul>
        <?php
        // *salvo il valore dell'array
        $postsValues = array_values($posts);
        // *salvo le chiavi dell'array
        $postsKeys = array_keys($posts);

        for ($i = 0; $i < count($postsKeys); $i++) { ?>
            <h4>Post in data <?php echo $postsKeys[$i] ?></h4>
            <?php for ($j = 0; $j < count($postsValues[$i]); $j++) { ?>
                <h3>
                    <?php echo $postsValues[$i][$j]['title'] ?>
                </h3>
                <h4>
                    <em>
                        <?php echo $postsValues[$i][$j]['author'] ?>

                    </em>
                </h4>
                <pre>
                    <?php echo $postsValues[$i][$j]['text'] ?>
                </pre>

            <?php } ?>
        <?php } ?>


    </ul>

</body>

</html>