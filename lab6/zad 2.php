<?php
function obliczCiagi($pierwszy, $r, $n) {
    //Suma ciągu arytmetycznego
    $suma_arytmetycznego = ($n * ($pierwszy + ($pierwszy + ($n - 1) * $r))) / 2;

    //Suma ciągu geometrycznego
    $suma_geometrycznego = $pierwszy * (pow($r, $n) - 1) / ($r - 1);

    // Wyświetlanie informacji
    echo "Suma ciągu arytmetycznego: $suma_arytmetycznego";
    echo "Suma ciągu geometrycznego: $suma_geometrycznego";
}

$pierwszy = 2;
$r = 3;
$n = 5;
obliczCiagi($pierwszy, $r, $n);
?>