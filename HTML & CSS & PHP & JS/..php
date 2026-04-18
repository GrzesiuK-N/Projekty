<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Galeria</title>
</head>
<body>

<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "galeria");
    if ($polaczenie == false ) {
        die("błąd połączenia zbazą danych");
    }
?>
 
    <header> <h1> Zdjęcia </h1></header>

    <div class="main">
    <div id="lewy">
        <h2> Tematy zdjęć </h2>
        <ol> 
            <li> Zwierzęta </li>  
            <li> Krajobrazy </li>    
            <li> Miasta </li>    
            <li> Przyroda </li>    
            <li> Samochody </li>      
        </ol>    
    </div>
    <div id="srodkowy"> 
        <?php
            $zapytanie2 = "SELECT z.plik, z.tytul, z.polubienia, a.imie, a.nazwisko from zdjecia z join autorzy a on z.autorzy_id = a.id order by nazwisko ASC;";
            $wynik = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz = mysqli_fetch_array($wynik)) {
                echo "<div class='pomocnicze'> 
                    <img src='".$wiersz['plik']."' alt='zdjecie'>
                    <h3> ".$wiersz['tytul']." </h3>";
                if ($wiersz["polubienia"] > 40) {
                    echo "<p>Autor: ".$wiersz['imie']." ".$wiersz['nazwisko'].". <br>Wiele osób polubiło ten obraz</p>";
                }
                else {
                    echo "<p>Autor: ".$wiersz['imie']." ".$wiersz['nazwisko']." </p>";
                }
                echo "<a href=".$wiersz['plik']." download='".$wiersz['tytul']."'>Pobierz </a>";
                echo "</div>";
            }
            
        ?>
    </div>
    <div id="prawy">
        <h2> Najbardziej lubiane </h2>    
        <?php
            $zapytanie1 = "SELECT tytul, plik from zdjecia WHERE polubienia >= 100;";
            $wynik = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz = mysqli_fetch_array($wynik)) {
            echo "<img src='".$wiersz['plik']."' alt='".$wiersz['tytul']."'>";
            }
        ?>
        <Br>
            <strong> Zobacz wszystkie nasze zdjęcia </strong> 
    </div>
</div>
    <footer> 
        <h5> Stronę wykonał: 10200304</h5>
    </footer>

<?php
    mysqli_close($polaczenie);
?>
    
</body>
</html>