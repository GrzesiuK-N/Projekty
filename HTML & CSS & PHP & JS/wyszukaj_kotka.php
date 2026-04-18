<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
 $wyszukiwanie = $_GET['wyszukiwanie'];

 $conn = mysqli_connect('localhost', 'root', '', 'kotki') or die ("blad");

 $sql = "SELECT * from rasy where nazwa like '%$wyszukiwanie%' or opis like '%$wyszukiwanie%' ";

 $result = mysqli_query($conn, $sql) or die("blad zapytania");

 while($row = mysqli_fetch_assoc($result)) {
    echo ('<h3>nazwa  '. $row['nazwa'] . '<br> opis: ' . $row['opis'] . '</h3>');
 }
    mysqli_close($conn);

  ?>
    
</body>
</html>