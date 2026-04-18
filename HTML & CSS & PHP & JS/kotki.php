<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= "kotki.css" rel="stylesheet">
    <title>Rzadkie_gatunki_kotow</title>
</head>
<body>

 <?php
 
   // połaczenie z bazą danych
     $conn = mysqli_connect('localhost', 'root', '', 'kotki') or die('bład połaczenia z bazą danych!');

     echo('połąćzono z bazą danych');

$sql = "select * from rasy";

// wykonanie polecenia
 $result = mysqli_query($conn, $sql) or die ('błędne zapytanie SQL');

 // pętla pobierająca z resoult pojedyńcze wiersze a z każdego wiersza nazwę

 while ($row = mysqli_fetch_assoc($result)) {
    echo ('<h3>' . $row ['nazwa'] . '</h3>');
 }

 // połaczenie się z bazą danych
 mysqli_close($conn);




?>
    
</body>
</html>