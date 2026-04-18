<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="styl9.css">
    <title>Poznaj Europę</title>
</head>
<body>

    <?php
       $polaczenie = mysqli_connect('localhost', 'root', '', 'podroze');
        if(!$polaczenie){
            die("Błąd połączenia z bazą");
  /*  if ($wiersznapoj) {
        $suma = ($wiersz[''] * $one) + (0.50 * $one);
        
        
    }
        */
}
    ?>

    <header>BIURO PODRÓŻY<header>
    <main>
        <div id="lewy"> 
            <h2>Promocje </h2>
            <table>
                <tr> 
                    <td>Warszawa </td> <td>od 600 zł </td>
                </tr>

                <tr> 
                    <td>Wenecja </td> <td>od 1200 zł </td>
                </tr>

                <tr> 
                    <td>Paryż </td> <td>od 1200 zł </td>
                </tr>
            </table>
        </div>
        <div id="srodkowy">
             <h2>W tym roku jedziemy do... </h2>   
             <?php
                $zapytanie = "SELECT nazwaPliku, podpis from zdjecia order by podpis ASC;";
                $wynik = mysqli_query($polaczenie, $zapytanie) or die ("blad select");
                while ($wiersz =mysqli_fetch_assoc($wynik)) {
                    echo ('<img src="'.$wiersz['nazwaPliku'].'" alt="'.$wiersz['podpis'].'" title="'.$wiersz['podpis'].'">');
                }


             ?>
        </div>
        <div id="prawy">
            <h2>Kontakt </h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas </a>
            <p>telefon: 444555666 </p>
        </div>
</main>

<section> 
    <h3>W poprzednich latach byliśmy... </h3>
    <ol>
        <?php

        $zapytanie = "SELECT cel, dataWyjazdu from wycieczki where dostepna = '0';";
                $wynik = mysqli_query($polaczenie, $zapytanie) or die ("blad select");
                while ($wiersz =mysqli_fetch_assoc($wynik)) {
                    echo ('<li>"Dnia'.$wiersz['dataWyjazdu'].'pojechaliśmy do '.$wiersz['cel'].'"</li>');
                }

        ?>
    </ol>
</section>

<footer> 
    <p>Stronę wykonał: 01020304 </p>
</footer>

<?php
    mysqli_close($polaczenie);
?>
    
</body>
</html>