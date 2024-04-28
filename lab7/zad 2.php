<?php

function rozepchnijTablice($tablica, $n) {
   
    if ($n < 0 || $n >= count($tablica)) {
        echo "BŁĄD: Nieprawidłowa pozycja n.\n";
        return;
    }

    $nowa_tablica = array();

    foreach ($tablica as $key => $wartosc) {
        if ($key == $n) {
            $nowa_tablica[] = '$';
        } else {
            $nowa_tablica[] = $wartosc;
        }
    }

    return $nowa_tablica;
}


$tablica = array(1, 2, 3, 4, 5);
$n = 2; 

$nowa_tablica = rozepchnijTablice($tablica, $n);

if ($nowa_tablica !== null) {
    echo "[ ";
    foreach ($nowa_tablica as $element) {
        echo $element . " ";
    }
    echo "]";
}

?>