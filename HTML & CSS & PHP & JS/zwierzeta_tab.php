<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $polaczenie = mysqli_connect("localhost", "root", "", "zwierzeta");

    if(!$polaczenie){
    die("Błąd połączenia z bazą");
}
?>

<?php

    echo "<h1>Tabelka zwierzaczków jakie są i jakich nie ma. </h1>";
    $zapytanie = "SELECT gatunek, imie, masa, rok_urodzenia, czy_adoptowany from zwierzeta;";
            $wynik = mysqli_query($polaczenie, $zapytanie);
             echo '<table>';
            while($wiersz = mysqli_fetch_array($wynik)) {
                    echo '<tr>';
                    echo '<td>'.$wiersz["imie"].'</td><td>'.$wiersz["masa"].'</td><td>'.$wiersz["rok_urodzenia"].'</td><td>'.$tak = $wiersz["czy_adoptowany"].'</td>';
                    echo '</tr>';
                }
                echo '</table>';
                
                if ($wiersz["czy_adoptowane"] == 1) {
                        echo "Tak";
                    }
                    else {
                        echo "Nie";
                    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
table{
    border: 2px solid navy;
}

td {
    border-style: solid;
    border-color: navy;
}

h1 {
    color: crimson;
    background-color: cornflowerblue;
}
</style>

    
</body>
</html>

<?php
    mysqli_close($polaczenie)
?>