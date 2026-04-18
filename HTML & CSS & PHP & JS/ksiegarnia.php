<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tytul</title>
</head>
<body>
    <?php
       
        echo("Hello Wolf");
        $conn = mysqli_connect('localhost', 'root', '', 'ksiegarnia'); 
        echo(" połączono z bazą <br>");

        $sql = "SELECT tytul from ksiazki";

        $result = mysqli_query($conn, $sql) or die("błąd zapytania sql!");

        while ($row = mysqli_fetch_row($result)) {
            echo ($row[0] . "<br>");
        }

        mysqli_close($conn);
        
        

    ?>

    
</body>
</html>