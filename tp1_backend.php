<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //ejercicio 1
    echo "Hola mundo "."<br>"; 

    //ejercicio 2
    $Saludo = "Hola mundo" ."<br>";

    
    //ejercicio 3
    echo $Saludo; 
    $Num1 = 2;
    $Num2 = 3;
    $Suma = $Num1 + $Num2;
    $Resta = $Num1 - $Num2;
    $Division = $Num1/$Num2;
    $Suma = $Num1 * $Num2;
    $Modulo = $Num1 % $Num2;


    //ejercicio 4
    $GradosCelsius = 20; 
    $PasarAFarenheit = ($GradosCelsius * 1.8) + 32;
    echo " 20 grados celsius son $PasarAFarenheit grados Farenheit"  ."<br>";

    //ejercicio 5 a)
    $Perimetro = 18*2 + 12*2; 
    echo "el perimetro del rectangulo es $Perimetro" ."<br>";
    $Area = 18 * 12;
    echo "el area del rectangulo es $Area" ."<br>";

    //ejercicio 5 b)
    $PerimetroCirculo = 2*3.14 * 30;
    echo "el perimetro del circulo es $PerimetroCirculo" ."<br>";
    $AreaCirculo = 3.14 * 30^2;
    echo "el area del circulo es $AreaCirculo" ."<br>"

    ?>
</body>
</html>