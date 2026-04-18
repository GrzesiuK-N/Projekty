<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Wyszukiwarka roslin:</h1>

     <?php 
          //laczenie sie z baza danych
          $conn = mysqli_connect('localhost', 'root', '', 'kwiaty') or die('blad polaczenia z baza danych');
          
            $q = $_GET['q'];

          //wysylanie zapytania (kwerendy) do bazy danych
          $sql = "SELECT * FROM rosliny WHERE nazwa LIKE '%$q%' ";
          $wynik = mysqli_query($conn, $sql);

           $liczba_wierszy = mysqli_num_rows($wynik);

          if ($liczba_wierszy > 0) {

          //w petli pobieram z wyniku po jednym wierszu
          while($wiersz = mysqli_fetch_row($wynik)) {
            echo('nazwa' . $wiersz[1] . 'cena' . $wiersz[1] . 'sztuk:' . $wiersz[1] . '<br>');
            echo('nazwa' . $wiersz[3] . 'cena' . $wiersz[3] . 'sztuk:' . $wiersz[3] . '<br>');
            echo('nazwa' . $wiersz[2] . 'cena' . $wiersz[2] . 'sztuk:' . $wiersz[2] . '<br>');
            echo('nazwa' . $wiersz[0] . 'cena' . $wiersz[0] . 'sztuk:' . $wiersz[0] . '<br>');
          }
        }

        else {
            echo('brak wynikow');
        }

        //
        mysqli_close($conn);
      ?>
</body>
</html>