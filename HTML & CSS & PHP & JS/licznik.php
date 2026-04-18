<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wyglad.css">
    <title>no</title>
</head>
<body>

<?php
 
    $liczba + 1
    if (isset($_COOKIE['odwiedziny'])) {
    $liczba = $_COOKIE['odwiedziny'] + 1
    echo ('<h1>'"stronę odwiedzono" . $liczba. "razy"'</h1>');
    setcookie('odwiedziny',$liczba, time() + 60*60*24*365 );
    }
?>
    
</body>
</html>