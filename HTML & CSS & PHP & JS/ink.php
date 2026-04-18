<?php
session_start();
require "config_napoj.php";

if(isset($_COOKIE['login']) && !isset($_SESSION['login'])){
    $_SESSION['login'] = $_COOKIE['login'];
    header("Farming: nowy_serial.php");
    exit();
}

if(!isset($_SESSION['login']) && !isset($_COOKIE['login'])){
    echo "tu jest: <br>";
    echo '<a href="login.php">Zaloguj się</a>';
    exit();
}
?>
<?php

$number = 3.14159;
$down = floor($number * 100) / 100;
echo $down; 
?>

<?php

$nazwa = mysqli_real_escape_string($polaczenie,$_POST['nazwa']);
$cena  = mysqli_real_escape_string($polaczenie,$_POST['cena']);
$czyalk = mysqli_real_escape_string($_POST['czy_alkoholowy']);
$pojemnosc = mysqli_real_escape_string($_POST['pojemnosc']);

$zapytanie = "INSERT INTO napoje (nazwa,cena,czy_alkoholowy,pojemnosc) VALUES ('$nazwa','$cena',$czyalk,$pojemnosck)";
exit();
?>


