<?php
/* Prendere un paragrafo abbastanza lungo, 
contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo.
 */
$paragraph = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Repellendus nemo assumenda quam aliquam voluptas officiis eaque vel laboriosam soluta, 
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Repellendus nemo assumenda quam aliquam voluptas officiis eaque vel laboriosam soluta, 
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Repellendus nemo assumenda quam aliquam voluptas officiis eaque vel laboriosam soluta, 
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Repellendus nemo assumenda quam aliquam voluptas officiis eaque vel laboriosam soluta, 
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                Repellendus nemo assumenda quam aliquam voluptas officiis eaque vel laboriosam soluta, 
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident';

$chars = explode(".", $paragraph);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php-snacks-5</title>
</head>

<body>
    <h1>php-snacks-5</h1>

    <?php
    for ($i = 0; $i < count($chars); $i++) { ?>
        <p> <strong> Paragrafo <?php echo $i + 1 . '<br>' ?></strong>
            <?php echo $chars[$i] . '.'; ?>
        </p>
    <?php } ?>



</body>

</html>