<?php
session_start();
require "config_napoj.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $wiek = (int)$_POST['wiek'];
    $_SESSION['czy_pelnoletni'] = ($wiek >= 18);
    header("Location: napoje.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dodatek.css">
    <title>Kontrola wieku</title>
</head>
<body>
    <form method="post">
        <h2>Ile masz lat?</h2>
        <input type="number" name="wiek" min="0" required>
        <button type="submit">Zatwierdź</button>
    </form>
</body>
</html>