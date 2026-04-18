<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="xmas.css">
    <title>Document</title>
</head>
<body>
    <?php
        $polaczenie = mysqli_connect('localhost', 'root', '','xmas');
        if ($polaczenie == false) {
            die ("Błąd bazy danych");
        }
    ?>

<header>
    <h1> prezenty na gwiazdkę </h1>
    <h3> 2025 </h3>
</header>
<main class = "bloki">
<div id="lewy"> 
    <ol> 
        <?php
            $zapytanie1 = "SELECT DISTINCT(kategoria) FROM prezenty;";
            $wynik = mysqli_query($polaczenie, $zapytanie1);
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo "<li>".$wiersz['kategoria']."</li>";
            }
        ?>
    </ol>
    
</div>
<div id="prawy"> 
    <form method="POST" action=""> 
        <input type="text" name="tekst" value="tekst"> <br>
        <input type="number" name="liczby" value="liczby"> 
        <button type="submit" value="wyslij"> wyślij </button> <br>
        <select> 
            <?php

                $zapytanie1 = "SELECT DISTINCT(kategoria) FROM prezenty;";
            $wynik = mysqli_query($polaczenie, $zapytanie1);
            while ($wiersz = mysqli_fetch_array($wynik)) {
                echo "<option>".$wiersz['kategoria']."</option>";
            }
            ?>
        </select>
    </form>
</div>
        </main>
<footer> 
    <p> stronę wykonał/a: Grzesiu</p>
</footer>

<?php
    mysqli_close($polaczenie);
?>

</body>
</html>