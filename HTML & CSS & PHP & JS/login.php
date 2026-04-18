<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: secret.php");
    exit();
}

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "Arbuz";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if ($polaczenie->connect_errno != 0) {
    die("Błąd połączenia z bazą: " . $polaczenie->connect_error);
}

$wiadomosc_nie = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $zapytanie = "SELECT id, haslo FROM uzytkownicy WHERE login = ?";

    if ($stmt = $polaczenie->prepare($zapytanie)) { 
        $stmt->bind_param("s", $login);
        $stmt->execute();
        $wynik = $stmt->get_result();

        if ($uzytkownik = $wynik->fetch_assoc()) {
            if (password_verify($haslo, $uzytkownik['haslo'])) {
                
                $_SESSION['user_id'] = $uzytkownik['id'];
                $_SESSION['login_timestamp'] = time();

                header("Location: secret.php");
                exit();

            } else {
                $wiadomosc_nie = "Nieprawidłowe hasło.";
            }
        } else {
            $wiadomosc_nie = "Użytkownik o takim loginie nie jest zapisany na liście oczekujących.";
        }
        $stmt->close();
    }
}
$polaczenie->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <style>
    .error { 
    color: red; 
    margin-bottom: 10px; }
    .login-box { margin: 50px auto; 
    width: 300px; 
    padding: 20px; 
    border: 1px solid #ccc; 
    border-radius: 5px; }
    input { 
    display: block; 
    width: 100%; 
    margin-bottom: 10px; 
    padding: 5px; 
    box-sizing: border-box; }
    </style>
</head>
<body>

    <div class="login-box">
        <h2>Zaloguj się</h2>

        <form method="post" action="login.php">
            <?php if ($wiadomosc_nie != ""): ?>
                <div class="error"><?php echo $wiadomosc_nie; ?></div>
            <?php endif; ?>

            <label for="login">Login:</label>
            <input type="text" name="login" id="login" required>

            <label for="haslo">Hasło:</label>
            <input type="password" name="haslo" id="haslo" required>

            <button type="submit">Zaloguj się</button>
        </form>
    </div>

</body>
</html>