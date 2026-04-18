<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Wyszukiwarka obszarow Marsa<h1>
        <form action="obszar.php" method="GET">
            <input type="text" name="fraza">
            <input type="submit" value="szukaj">
</form>

<?php
if (isset($_GET['fraza'])) {
    // polaczenie z bazą danych:
		$conn = mysqli_connect('localhost', 'root', '', 'mars') or die ('nie udalo sie polaczyc z baza danych');

        echo('polaczenie nawiazane!');

        $fraza = $_GET['fraza'];

        $sql = "SELECT nazwa_obszaru FROM obszary WHERE nazwa_obszaru LIKE '%$fraza%' ";    // '%" . $_GET['fraza'] . " %' "

         //wyslania zapytania SQL na serwer
         $result = mysqli_query($conn, $sql) or die('blad zapytania!');

         // pobranie liczby wyników
         $liczba = mysqli_num_rows($result);

         if ($liczba == 0) {
            echo ('<h2>nic nie znaleziono!</h2>');
         }
         else {
            echo ("<h2>znaleziono tyle wynikow: $liczba</h2>");
         }

         // dopoki mozesz pobrac nowy wiersz, to pobieraj
         while($row = mysqli_fetch_assoc($result)) {
         echo($row['nazwa_obszaru'] . '<br>');
         }

         //koniczenie polaczenia z baza danych
         mysqli_close($conn);
	} 
?>

</body>
</html>