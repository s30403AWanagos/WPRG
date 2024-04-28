<?php
function czyPangram($tekst) {
    $tekst = strtolower(preg_replace("/[^a-z]/", '', $tekst));
    
    $litery = array_unique(str_split($tekst));
    
    $alfabet = range('a', 'z');
    sort($litery);
    
    return $litery === $alfabet;
}

$tekst = "The quick brown fox jumps over the lazy dog.";
echo czyPangram($tekst) ? "true" : "false";

?>