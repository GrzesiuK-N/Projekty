<?php
require "config_napoj.php";

$zapytanie = "SELECT * FROM napoje";
$wynik = mysqli_query($polaczenie,$zapytanie);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="dodatek.css">
<title>okk</title>
</head>

<body>

<h2>Tabela napoji</h2>

<dl>

<?php
while($wiersz = mysqli_fetch_assoc($wynik)){

    echo "<table>";

        echo "<tr>";
            echo "<th>Nazwa</th>";
            echo "<th>Cena</th>";
            echo "<th>mozliwy_alkolowy</th>";
            echo "<th>pojemnosc</th>";
        echo "</tr>";

        echo "<br>";

        echo "<tr>";
            echo "<td>".$wiersz['nazwa']."</td>";
            echo "<td>".$wiersz['cena']."</td>";
            echo "<td></td>";
            echo "<td>".$wiersz['pojemnosc']."</td>";
        echo "</tr>";
    echo "</table>";

}
?>

</dl>

<button>Dodaj </button>


</body>
</html>