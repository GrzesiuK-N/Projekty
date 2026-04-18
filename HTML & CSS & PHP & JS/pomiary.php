<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wypisywanie danych pomiarow</title>
    <style>
              td, th, table{
                border: 1px solid green;
              }


        </style>
</head>
<body>
<h1>Wypisywanie danych pomiarow dla roku</h1>
<form method="GET" action="pomiary.php"> 
podaj rok: <input type="number" min="2000" max ="3000" name="rok">
<input type="submit" value="szukaj">
</form>

<?php
if (isset($_GET['rok'])) {
 $rok = $_GET['rok'];

 $conn = mysqli_connect('localhost', 'root', '', 'mars') or die("error");

 $sql = "SELECT * FROM pomiary WHERE data_pomiaru LIKE '$rok-%' ";

 $result = mysqli_query($conn, $sql) or die('error 2');

$liczba = mysqli_num_rows($result);

 if ($liczba == 0) {
      echo("<h2>brak winikow dla roku $rok </h2>");
 }



 echo ('<table>');
 echo ('<tr>');
  echo ('<th>nr lazika<th>');
  echo ('<th>data pomiaru<th>');
  echo ('<th>obszaru<th>');
  echo ('<th>glebokosc<th>');
  echo ('<th>ilosc wody [m3]<th>');
   echo ('</tr>');
    echo ('</table>');

   echo ('<table>');

 while($row = mysqli_fetch_row($result)) {
     echo ('<tr>');
     echo ('<td>' . $row[0] . '</td>');
     echo ('<td>' . $row[1] . '</td>');
     echo ('<td>' . $row[2] . '</td>');
     echo ('<td>' . $row[3] . '</td>');
     echo ('<td>' . $row[4] . '</td>');
     echo ('<td>' . $row[5] . '</td>');
     echo ('</tr>');
 }
 echo ('</table>');

mysqli_close($conn);
}

?>
    
</body>
</html>