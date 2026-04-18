<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stronka</title>
</head>
<body>

<?php

if isset([$_SESSION['login']]) and isset([$_POST['lang']]) {

    echo ('<h2> język na:' . $_POST['lang'] . '</h2>');

    //ustawienie 
    setcookie('jezyk', $_POST['lang'], time() + 60*60*24*7 );
}

?>  
    <a href="main.php">Strona główna </a>
</body>
</html>