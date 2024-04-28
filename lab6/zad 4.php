<?php
function sumaCyfr($liczba) {
    $cyfry = str_split((string)$liczba);
    
    $suma = 0;
    
    foreach ($cyfry as $cyfra) {
        $suma += (int)$cyfra;
    }
    
    return $suma;
}

$liczba = 89976;
echo "Suma cyfr liczby $liczba wynosi: " . sumaCyfr($liczba);
?>
