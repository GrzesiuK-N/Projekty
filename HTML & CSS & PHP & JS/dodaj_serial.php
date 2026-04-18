<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tlo_php.css">
    <title>Blabla</title>
</head>
<body>

<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'seriale') or die("błąd bazy danych");

 


mysqli_close($polaczenie);
    ?>
</body>
</html>