<?php
function isPrime($num) {
	if ($num <= 1) {
		return false;
	}
	for ($i = 2; $i <= sqrt($num); $i++) {
		if ($num % $i == 0) {
			return false;
		}
	}
	return true;
}

function printPrime($zakres) {
	for ($i = 2; $i <= $zakres; $i++) {
		if (isPrime($i)) {
			echo $i . " ";
		}
	}
}

$zmienna = 37;
printPrime($zmienna);
?>