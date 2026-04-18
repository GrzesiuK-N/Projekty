<?php
require "config.php";

$sql = "SELECT * FROM lista ORDER BY id_serialu DESC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Seriale</title>
</head>

<body>

<h2>Lista seriali</h2>

<dl>

<?php
while($row = mysqli_fetch_assoc($result)){

    echo "<dt>".$row['tytul']."</dt>";

    echo "<dd>";
    echo $row['opis']."<br>";
    echo "Ocena: ".$row['ocena']." / 10<br>";
    echo "Rok: ".$row['rok_stworzenia'];
    echo "</dd>";
}
?>

</dl>

<a href="nowy_serial.php">Dodaj nowy</a>

</body>
</html>
