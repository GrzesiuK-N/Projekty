<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tytul</title>
</head>
<body>

<form action="ksiazka.php" method="POST"></form>
    szukaj: <input type="search" name="szukaj">
    <button type="submit" id="wyslij">klik</button>

    <?php
       
        echo("Hello Wolf");
        $polaczenie = mysqli_connect('localhost', 'root', '', 'ksiegarnia'); 
        echo(" połączono z bazą <br>");

        $szukane = $_POST['szukaj'];
        $sql = "SELECT tytul, cena, rok_wydania from ksiazki where tytul like '%$szukane%'";
    

        $result = mysqli_query($polaczenie, $sql) or die("błąd zapytania sql!");

        while ($row = mysqli_fetch_row($result)) {
            echo ($row[0] . "<br>". $row[1] . "<br>" . $row[2] . "<br>");
        }

        $sql1 = "SELECT k.tytul, k.cena, a.imie, a.nazwisko From ksiazki k join autorzy a on k.id_autora = a.id_autora where k.tytul like '%$szukane%' ";
        $result = mysqli_query($polaczenie, $sql1) or die("błąd zapytania sql!");

        $ile_wynikow = mysqli_num_rows($result);

        if($ile_wynikow > 0) {
            echo("znaleziono wyników: " . $ile_wynikow . "<br><br>");
        }
        else {
            echo("nic nie znaleziono!");
        }


        while ($row = mysqli_fetch_row($result)) {
            echo ($row[0] . "<br>". $row[1] . "<br>" . $row[2] . "<br>" . $row[3] . "<br>");
        }


        mysqli_close($polaczenie);
        
        

    ?>

    
</body>
</html>