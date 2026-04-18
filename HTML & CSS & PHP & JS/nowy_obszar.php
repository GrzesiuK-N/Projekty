<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowy obszar</title>
</head>
<body>
    
      <h1> Dodaj nowy obszar: </h1>
      <from method="POST" action="nowy_obszar.php"> 
      kod obszaru: <input type="text" name="kod_obszaru"> <br>
      nazwa obszaru: <input type="text" name="nazwa_obszaru"> <br>
      <input type="submit" value="wyslij">
</from>
<?php
if (isset($_POST['kod_obszaru']) && isset($_POST['nazwa_obszaru'])) {
    $kod_obszaru = $_POST['kod_obszaru'];
    $nazwa_obszaru = $_POST['nazwa_obszaru']
    
    //laczenie z baza danych
    $conn = mysqli_connect('localhost', 'root', '', 'mars') or die ('nie udalo sie polaczyc z baza danych');

    $sql = "INSERT INTO obszary (kod_obszaru, nazwa_obszaru) VALUES ('$kod_obszaru', '$nazwa_obszaru')";

     $result = mysqli_query($conn, $sql) or die('blad zapytania!');

     echo('<h2>dane wstawione!</h2>');

     //koniczenie polaczenia z baza danych
         mysqli_close($conn);

}
?>
</body>
</html>