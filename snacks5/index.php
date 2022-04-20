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
                sapiente asperiores dolor maiores facere placeat magni atque ipsam deserunt provident.';

$chars = preg_split("/[.]+/", $paragraph);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-5</title>
</head>

<body>
    <h1>php-snacks-5</h1>
    <pre>

        <?php echo var_dump($chars); ?>
    </pre>

</body>

</html>