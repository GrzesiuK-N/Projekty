<?php
session_start();
require "config_napoj.php";

$czy_pelnoletni = isset($_SESSION['czy_pelnoletni']) && $_SESSION['czy_pelnoletni'] === true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_napoju = (int)$_POST['id_napoju'];
    $sztuk = (int)$_POST['sztuk'];

    $zapytanie = "SELECT * FROM napoje WHERE id = $id_napoju";
    $wynik = mysqli_query($polaczenie, $zapytanie);
    $napoj = mysqli_fetch_assoc($wynik);

    if ($napoj) {
        $cena_laczna = ($napoj['cena'] * $sztuk) + (0.50 * $sztuk);
        
        setcookie("ostatni_zakup", $napoj['nazwa'], time() + (7 * 24 * 60 * 60));

        echo "<h2>Podsumowanie zakupu: '_'</h2>";
        echo "Wybrano: " . $napoj['nazwa'] . "<br>";
        echo "Do zapłaty: " . number_format($cena_laczna, 2) . " zł (w tym kaucja/zaległe fundusze)<br>";
        echo '<a href="napoje.php">Wróć do listy</a>';
    }
    exit();
}

$sql = "SELECT * FROM napoje";
if (!$czy_pelnoletni) {
    $sql .= " WHERE czy_alkoholowy = 0";
}
$lista = mysqli_query($polaczenie, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dodatek.css">
    <title>Zakup</title>
</head>
<body>
    <form method="post">
        <h2>Formularz zakupu</h2>
        Wybierz napój:
        <select name="id_napoju">
            <?php while($n = mysqli_fetch_assoc($lista)): ?>
                <option value="<?php echo $n['id']; ?>"><?php echo $n['nazwa']; ?> (<?php echo $n['cena']; ?> zł)</option>
            <?php endwhile; ?>
        </select><br><br>
        Liczba sztuk:
        <input type="number" name="sztuk" min="0" value="1" required><br><br>
        <button type="submit">Kupuję</button>
    </form>
</body>
</html>