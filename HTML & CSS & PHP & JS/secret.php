<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['login_timestamp'])) {
    header("Location: login.php");
    exit();
}

$teraz = time();
$czas_logowania = $_SESSION['login_timestamp'];
$roznica_sekund = $teraz - $czas_logowania;
$ile_minut = floor($roznica_sekund / 60);

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Arbuz";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

$email = "";
$plec = "";
$data_urodzenia = "";

if ($polaczenie->connect_errno == 0) {
    $idUzytkownika = $_SESSION['user_id'];

    $zapytanie = "SELECT plec, email, data_urodzenia FROM uzytkownicy WHERE id = ?";
    
    if ($stmt = $polaczenie->prepare($zapytanie)) {
        $stmt->bind_param("i", $idUzytkownika);
        $stmt->execute();
        $wynik = $stmt->get_result();
        
        if ($uzytkownik = $wynik->fetch_assoc()) {
            $email = $uzytkownik['email'];
            $plec = $uzytkownik['plec'];
            $data_urodzenia = $uzytkownik['data_urodzenia'];
        }
        $stmt->close();
    }
    $polaczenie->close();
} else {
    die("Błąd połączenia z bazą danych.");
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Secret - Panel Użytkownika</title>
    <style>
    body { 
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0; 
        line-height: 1.6; 
    }
    .top-bar { 
        background-color: #333; 
        color: #fff; 
        padding: 10px 20px; 
        text-align: right; 
        font-size: 0.9em;
    }
    .container { 
        padding: 20px; 
        max-width: 800px; 
        margin: auto; 
    }
    .data-list { 
        background: #f9f9f9; 
        padding: 15px; 
        border-radius: 5px; 
        border: 1px solid #ddd; 
        list-style: none; 
    }
    .data-list li { 
        margin-bottom: 10px; 
    }
    .data-list strong { 
        color: #555; 
    }
    .logout-link { 
        color: #d9534f; 
        text-decoration: none; 
        font-weight: bold; 
    }
    .logout-link:hover { 
        text-decoration: underline; 
    }
    </style>
</head>
<body>

    <div class="top-bar">
        Zalogowano <?php echo $ile_minut; ?> min. temu
    </div>

    <div class="container">
        <h1>Strefa Tajna (secret.php)</h1>
        
        <p>Witaj! Poniżej znajdują się Twoje dane pobrane z bazy:</p>

        <ul class="data-list">
            <li><strong>Płeć:</strong> <?php echo htmlspecialchars($plec); ?></li>
            <li><strong>Adres Email:</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Data urodzenia:</strong> <?php echo htmlspecialchars($data_urodzenia); ?></li>
        </ul>

        <p><a href="logout.php" class="logout-link">Wyloguj się z systemu</a></p>
    </div>

</body>
</html>