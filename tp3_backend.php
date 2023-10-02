
<!-- ej 1 -->
<!-- <?php

$i = 1;

while ($i <= 100) {
    echo "$i";
    $i++;
}
?> -->

<!-- ej 2 -->
<!-- <?php

$i = 100;

while ($i <= 100 && $i >= 1 ) {
    echo "$i";
    $i--;
}
?> -->

<!-- ej 3 -->

<!-- <?php


for ($i=1; $i <= 100 ; $i++) { 
    if ($i %2 === 0) {
        echo "$i";
    }
}

?> -->

<!-- ej 4 -->

<!-- <?php


for ($i=1; $i <= 100 ; $i++) { 
    if ($i %2 !== 0) {
        echo "$i";
    }
}

?> -->

<!-- ej 5 -->
<!-- <?php

$suma = 0;
for ($i=1; $i <= 20; $i++) { 
    $suma += $i;
    echo "$suma";
}
?> -->


<!-- ej 6 -->
<!-- <?php
$suma = 0;
$sumaPares = 0;
for ($i=1; $i <= 20; $i++) { 
    $suma += $i; // suma todos los numeros
    if ($i % 2 === 0) { //de todos los numeros chequea los que son pares y los suma
        $sumaPares = $sumaPares += $i;
        echo "$sumaPares";
    }
}
?> -->

