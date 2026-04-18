<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> </h1>
    <?php
            $conn = mysqli_connect('localhost', 'root', '', 'sklep') or die ('blad polaczenia z baza danych!');

       $sql = "SELECT * FROM chomik";

       $result = mysqli_query($conn, $sql);

       while($row = mysqli_fetch_row($result)) {
        echo ($row[1]. ' ' . $rows[2] . '<br>');
        
        echo('imie' . $row[1] . 'nazwisko' . $row[1] . 'cena:' . $row[1] . '<br>');
        echo('imie' . $rows[2] . 'nazwisko' . $rows[2] . 'cena:' . $rows[2] . '<br>');
      }

      echo('<table>' . 'imie' . $row[1] . 'nazwisko' . $row[1] . 'cena:' . $row[1] . '<br>' . '</table>');
        echo('</table>' . 'imie' . $rows[2] . 'nazwisko' . $rows[2] . 'cena:' . $rows[2] . '<br>' . '</table>');

      mysqli_close($conn);
    ?>
</body>
</html>