<?php
$servername = "localhost";
$username = "38710318_smok"; 
$password = "TWOJE_HASLO";   
$dbname = "38710318_smok";    

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $polaczenie = mysqli_connect($servername, $username, $password, $dbname);

    if (!$polaczenie) {
        die("Błąd połączenia: " . mysqli_connect_error());
    }

    $gatunek = mysqli_real_escape_string($polaczenie, $_POST['gatunek']);
    $imie = mysqli_real_escape_string($polaczenie, $_POST['imie']);
    $masa = str_replace(',', '.', $_POST['masa']);
    $masa = floatval($masa);
    $rok_urodzenia = intval($_POST['rok_urodzenia']);

    $zapytanie = "INSERT INTO zwierzeta (gatunek, imie, masa, rok_urodzenia) 
            VALUES ('$gatunek', '$imie', '$masa', '$rok_urodzenia')";

    if (mysqli_query($polaczenie, $zapytanie)) {
        $message = "<p style='color: green;'>Pomyślnie dodano zwierzaka do bazy!</p>";
    } else {
        $message = "<p style='color: red;'>Błąd podczas dodawania: " . mysqli_error($polaczenie) . "</p>";
    }

    mysqli_close($polaczenie);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj zwierzaka</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        form { max-width: 400px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .pole { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; box-sizing: border-box; }
        input[type="submit"] { background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
    </style>
</head>
<body>

    <h2>Rejestracja nowego zwierzaka</h2>
    
    <?php echo $message; ?>

    <form method="post" action="dodaj_zwierze.php">
        <div class="pole">
            <label for="gatunek">Gatunek:</label>
            <select name="gatunek" id="gatunek" required>
                <option value="pies">pies</option>
                <option value="kot">kot</option>
                <option value="szczur">szczur</option>
                <option value="świnka morska">świnka morska</option>
                <option value="świnia">świnia</option>
                <option value="gołąb">gołąb</option>
            </select>
        </div>

        <div class="pole">
            <label for="imie">Imię:</label>
            <input type="text" name="imie" id="imie" maxlength="200" required>
        </div>

        <div class="pole">
            <label for="masa">Masa (kg):</label>
            <input type="number" name="masa" id="masa" step="0.01" min="0.01" required>
        </div>

        <div class="pole">
            <label for="rok_urodzenia">Rok urodzenia:</label>
            <input type="number" 
                   name="rok_urodzenia" 
                   id="rok_urodzenia" 
                   min="2000" 
                   max="3000" 
                   value="<?php echo date('Y'); ?>" 
                   required>
        </div>

        <input type="submit" value="Dodaj zwierzaka">
    </form>

</body>
</html>