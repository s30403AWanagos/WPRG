<?php

function pomnozMacierze($macierz1, $macierz2) {
    $wiersze_m1 = count($macierz1);
    $kolumny_m1 = count($macierz1[0]);
    $wiersze_m2 = count($macierz2);
    $kolumny_m2 = count($macierz2[0]);


    if ($kolumny_m1 !== $wiersze_m2) {
        echo "Nie można pomnożyć macierzy - niezgodne wymiary!";
        return null;
    }


    $wynikowa_macierz = array_fill(0, $wiersze_m1, array_fill(0, $kolumny_m2, 0));


    for ($i = 0; $i < $wiersze_m1; $i++) {
        for ($j = 0; $j < $kolumny_m2; $j++) {
            for ($k = 0; $k < $kolumny_m1; $k++) {
                $wynikowa_macierz[$i][$j] += $macierz1[$i][$k] * $macierz2[$k][$j];
            }
        }
    }

    return $wynikowa_macierz;
}


$macierz1 = array(
    array(2, 3),
    array(4, 5),
);

$macierz2 = array(
    array(1, 2),
    array(3, 4),
);

$wynik = pomnozMacierze($macierz1, $macierz2);
if ($wynik !== null) {
    echo "Wynik mnożenia macierzy: ";
    foreach ($wynik as $wiersz) {
        echo implode(" ", $wiersz) . " ";
    }
}

?>