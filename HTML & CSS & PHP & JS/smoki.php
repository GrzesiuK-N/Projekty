<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <script src="smoki.js"></script>
    <title>Smoki</title>
</head>
<body>

<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "smoki");
    if ($polaczenie == false) {
        die("Błąd połączenia z bazą danych");
    }
?>

    <header> 
       <h2> Poznaj smoki!</h2>
    </header>

    <nav> 
        <div id="baza"> Baza </div>
        <div id="opisy"> Opisy </div>
        <div id="galeria"> Galeria </div>
    </nav>

    <main> 
        <section id="sect1"> 
            <h3> Baza smoków </h3>   
            <form action="" method="post">
                <select name="Pochodzenie">
                    <?php
                        $zapytanie2 = "SELECT DISTINCT Pochodzenie FROM Smok ORDER BY Pochodzenie ASC;";
                        $wynik = mysqli_query($polaczenie, $zapytanie2);
                        while($wiersz = mysqli_fetch_array($wynik)) {
                            echo '<option>'.$wiersz["Pochodzenie"].'</option>';
                        }

                    ?>
                </select>
                <button type="submit">Szukaj</button>
            </form> 

            <table>
                <tr> 
                    <th>Nazwa</th> <th>Długość </th> <th>Szerokość </th> 
                </tr>
                <?php
                    $pochodzenie = $_POST["Pochodzenie"] ?? "";
                    $pochodzenie = mysqli_real_escape_string($polaczenie, $pochodzenie);
                    
                    $zapytanie1 ="SELECT nazwa, dlugosc, szerokosc FROM smok WHERE Pochodzenie = '$pochodzenie';";
                    $wynik = mysqli_query($polaczenie, $zapytanie1);
                    while($wiersz = mysqli_fetch_array($wynik)) {
                        echo '
                           <tr>
                            <td>'.$wiersz["nazwa"].'</td><td>'.$wiersz["dlugosc"].'</td><td>'.$wiersz["szerokosc"].'</td>
                           </tr>
                        ';
                    }

                    
                ?>
            </table>
        </section>
        <section id="sect2">
            <h3>Opisy smoków</th>
            <dl>
                  <dt>Smok czerwony</dt>
<dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny. </dd>
		
<dt>Smok zielony</dt>
<dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały. </dd>

<dt>Smok niebieski </dt>
<dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>
  
            </dl>
        </section>
        <section id="sect3"> 
            <h3>Galeria </h3>
            <img src="smok1.JPG" alt="Smok Czerwony">
            <img src="smok2.JPG" alt="Smok Wielki">
            <img src="smok3.JPG" alt="Skrzydlaty Łaciaty">
        </section>
    </main>

    <footer>
        <p>Stronę opracował: 01020304050 </p>    
    </footer>

    <?php
        mysqli_close($polaczenie);
    ?>

    
</body>
</html>