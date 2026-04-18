<?php
require "config_napoj.php";

$zapytanie = "SELECT * FROM napoje ";
$wynik = mysqli_query($polaczenie,$zapytanie);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="dodatek.css">
<title>Nowy turkusowy</title>
</head>
<body>

<?php
if(!isset($_POST['nazwa'])){
    echo "<form method='post' action='dodaj_napoj.php'>";
    echo "<br>";
    echo "Nazwa: ";
    echo "<input type='text' name='nazwa' required>";
    echo "<br>";
    echo "<br>";
    echo "Cena: ";
    echo "<input type='number' name='cena' min='0' required>";
    echo "<br>";
    echo "<br>";
    echo "Alkoholowy_moze: ";
    echo "<input type='checkbox' name='cz_alkoholowy' required>";
    echo "<br>";
    echo "<br>";
    echo "Pojemnosc: ";
    echo "<input type='number' name='pojemnosc' min='0'>";

    echo "</form>";
}

else {
    $nazwa = $_POST['nazwa'];
    $cena = $_POST['cena'];
    $pojemnosc = $_POST['pojemnosc'];
    $zapytanie = "insert into  napoje (nazwa, cena, czy_alkoholowy, pojemnosc) values ('".$nazwa."',)";
}

?>

<button>Dodaj</button>

<a href="napoje.php">Tabela energetyzujacych napoji</a>

</body>
</html>
