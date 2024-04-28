<?php
function utworzTablice($a, $b, $c, $d) {
    $tablica = array();

    
    for ($i = $a; $i <= $b; $i++) {
        $tablica[$i] = range($c, $d);
    }

    return $tablica;
}

$a = 1;
$b = 4;
$c = 9;
$d = 13;

$wynikowa_tablica = utworzTablice($a, $b, $c, $d);

print_r($wynikowa_tablica);

?>