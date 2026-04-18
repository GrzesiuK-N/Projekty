<?php
 $polaczenie = mysqli_connect("localhost", "root", "", "chemia");
    if ($polaczenie == false ) {
        die("błąd połączenia zbazą danych");
    }
?>