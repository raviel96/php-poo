<?php

require "../classes/Ville.php";
require "../classes/Clothing.php";

$ville = new Ville();

$villes = $ville->recupereVilles();

// var_dump($villes);

$clothing = new Clothing("blanc", 175, 59);

var_dump($clothing);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - POO</title>
</head>
<body>
    <div class="container">
        <ul>
            <?php foreach($villes as $ville) :?>
                <li><?php echo $ville['ville_nom'];?></li>
            <?php endforeach?>
        </ul>
    </div>
</body>
</html>