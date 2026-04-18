<?php
function nwd($a, $b) {
    while ($b != 0) {
        $c = $a % $b;
        $a = $b;
        $b = $c;
    }
    return $a;
}

function nww($a, $b) {
    return ($a * $b) / nwd($a, $b);
}

function naIndeksDolny($liczba) {
    if ($liczba == 1) return "";
    $indeksy = ['0'=>'₀', '1'=>'₁', '2'=>'₂', '3'=>'₃', '4'=>'₄', '5'=>'₅', '6'=>'₆', '7'=>'₇', '8'=>'₈', '9'=>'₉'];
    return strtr($liczba, $indeksy);
}

$polaczenie = new mysqli("localhost", "root", "", "pierwiastki");

if ($polaczenie->polaczenie_error) {
    die("Błąd połączenia: " . $polaczenie->polaczenie_error);
}

$polaczenie->set_charset("utf8");

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Generator Tlenków</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .wynik { font-size: 48px; font-weight: bold; margin-top: 20px; }
        .nazwa { font-size: 24px; font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>

    <form method="get" action="pierwiastki.php">
        <select name="pierwiastek">
            <?php
            $zapytanie = "SELECT id, nazwa, stopien FROM pierwiastki";
            $wynik = $conn->query($sql);

            if ($wynik->num_rows > 0) {
                while($wiersz = $wynik->fetch_assoc()) {
                    $selected = (isset($_GET['pierwiastek']) && $_GET['pierwiastek'] == $wiersz['id']) ? "selected" : "";
                    echo "<option value='".$wiersz['id']."' $selected>".$wiersz['nazwa']." (".$wiersz['stopien'].")</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="generuj tlenek">
    </form>

    <?php
    if (isset($_GET['pierwiastek'])) {
        $id = intval($_GET['pierwiastek']);
        
        $zapytanie = "SELECT nazwa, symbol, stopien FROM pierwiastki WHERE id = $id";
        $stmt = $polaczenie->query($zapytanie);
        
        if ($wiersz = $stmt->fetch_assoc()) {
            $nazwa = $wiersz['nazwa'];
            $symbol = $wiersz['symbol'];
            $stopienP = $wiersz['stopien'];
            $stopienO = 2;

            $wspolny = nww($stopienP, $stopienO);
            
            $indeksP = $wspolny / $stopienP;
            $indeksO = $wspolny / $stopienO;

            $txtIndeksP = naIndeksDolny($indeksP);
            $txtIndeksO = naIndeksDolny($indeksO);

            echo "<div class='wynik'>".$symbol.$txtIndeksP."O".$txtIndeksO."</div>";
            echo "<div class='nazwa'>tlenek ".($nazwa == 'sód' ? 'sodu' : $nazwa)." ($stopienP)</div>";
        }
    }

    $polaczenie->close();
    ?>

</body>
</html>