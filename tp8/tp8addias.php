<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$dbConnect = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($dbConnect,"tienda");

$showAll = 'SELECT * FROM ropa WHERE marca = "addidas" ';

$data = mysqli_query($dbConnect, $showAll);



while ($fetching = mysqli_fetch_array($data)) { ?>
    <ul>
        <li><?php echo $fetching ["id"] ?></li>
        <li><?php echo $fetching ["prenda"] ?></li>
        <li><?php echo $fetching ["marca"] ?></li>
        <li><?php echo $fetching ["talle"] ?></li>
        <li><?php echo $fetching ["precio"] ?></li>
</ul>

<?php } ?>

?>