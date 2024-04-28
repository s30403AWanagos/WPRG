<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
</head>
<body>

<h2>Kalkulator prosty</h2>
<form method="post" action="">
    <input type="text" name="liczba1" placeholder="Liczba 1" required>
    <select name="operator">
        <option value="dodawanie">+</option>
        <option value="odejmowanie">-</option>
        <option value="mnożenie">*</option>
        <option value="dzielenie">/</option>
    </select>
    <input type="text" name="liczba2" placeholder="Liczba 2" required>
    <input type="submit" name="submit1" value="Oblicz">
</form>

<?php
if (isset($_POST['submit1'])) {
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $operator = $_POST['operator'];

    if (!is_numeric($liczba1) || !is_numeric($liczba2)) {
        echo "BŁĄD: Wprowadź poprawne liczby!<br>";
    } else {
        switch ($operator) {
            case "dodawanie":
                $wynik = $liczba1 + $liczba2;
                break;
            case "odejmowanie":
                $wynik = $liczba1 - $liczba2;
                break;
            case "mnożenie":
                $wynik = $liczba1 * $liczba2;
                break;
            case "dzielenie":
                if ($liczba2 == 0) {
                    echo "BŁĄD: Dzielenie przez zero!<br>";
                } else {
                    $wynik = $liczba1 / $liczba2;
                }
                break;
        }
        echo "Wynik: $wynik";
    }
}
?>

<hr>

<h2>Kalkulator zaawansowany</h2>
<form method="post" action="">
    <input type="text" name="liczba3" placeholder="Liczba" required>
    <select name="operator2">
        <option value="cosinus">Cosinus</option>
        <option value="sinus">Sinus</option>
        <option value="tangens">Tangens</option>
        <option value="binarny_na_dziesiętny">Binarne na dziesiętne</option>
        <option value="dziesiętny_na_binarny">Dziesiętne na binarne</option>
        <option value="dziesiętny_na_szesnastkowy">Dziesiętne na szesnastkowe</option>
        <option value="szesnastkowy_na_dziesiętny">Szesnastkowe na dziesiętne</option>
    </select>
    <input type="submit" name="submit2" value="Oblicz">
</form>

<?php
if (isset($_POST['submit2'])) {
    $liczba3 = $_POST['liczba3'];
    $operator2 = $_POST['operator2'];

    if (!is_numeric($liczba3)) {
        echo "BŁĄD: Wprowadź poprawną liczbę!<br>";
    } else {
        switch ($operator2) {
            case "cosinus":
                $wynik = cos($liczba3);
                break;
            case "sinus":
                $wynik = sin($liczba3);
                break;
            case "tangens":
                $wynik = tan($liczba3);
                break;
            case "binarny_na_dziesiętny":
                $wynik = bindec($liczba3);
                break;
            case "dziesiętny_na_binarny":
                $wynik = decbin($liczba3);
                break;
            case "dziesiętny_na_szesnastkowy":
                $wynik = dechex($liczba3);
                break;
            case "szesnastkowy_na_dziesiętny":
                $wynik = hexdec($liczba3);
                break;
        }
        echo "Wynik: $wynik";
    }
}
?>

</body>
</html>