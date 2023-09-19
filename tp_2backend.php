<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $N;
    $Numero1;
    $Numero2;

    if ($N > 0) {   //ejercicio 1
        echo "el numero es positivo";
    };

    if ($N > 1 && $N < 10) {  // ejercicio 2
        echo "el numero es mayor a 1 y menor a 10";
    };
    
    if ($N > 10 || $N < 2) {  //ejercicio 3
        echo "el numero puede ser menor a 2 o mayor a 10";
    }

    if ($Numero1 > $Numero2) {  //ejercicio 4
        echo "$Numero1 + $Numero2";
        echo "$Numero1 - $Numero2";
    } elseif($Numero2 > $Numero1){
        echo "$Numero2 * $Numero1";
        echo "$Numero2 / $Numero1";
        echo "$Numero2 % $Numero1";
    } else {
           echo "Los numeros ingresados son iguales";
    }
    ?>
    
</body>
</html>