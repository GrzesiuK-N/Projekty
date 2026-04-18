<?php
include("connect.php");
if(isset($_POST['nazwa'])&&isset($_POST['populacja'])&&isset($_POST['kontynent'])){
    $nazwa = mysqli_escape_string($conn,$_POST['nazwa']);
    $populacja = mysqli_escape_string($conn,$_POST['populacja']);
    $kontynent = mysqli_escape_string($conn,$_POST['kontynent']);
    $czy_demokracja = '1'*isset($_POST['demokracja']);
    echo "INSERT INTO kraje (nazwa, kontynent, populacja, czy_demokratyczny) VALUES ('$nazwa','$kontynent',$populacja,$czy_demokracja)";
    mysqli_query($conn,"INSERT INTO kraje (nazwa, kontynent, populacja, czy_demokratyczny) VALUES ('$nazwa','$kontynent',$populacja,$czy_demokracja)") or die('u mother flufer!');
    header('Location: ' . "./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj</title>
    <style>
        body{
            background-color: black;
            color: antiquewhite;
            font-family: Verdana;
            font-size:18px;
        }
        form{
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
    <form method="post">
        nazwa kraju: <input type="text" name="nazwa"> <br>
        kontynent: <select name="kontynent">
            <option value="Afryka">Afryka</option>
            <option value="Ameryka Południowa">Ameryka Południowa</option>
            <option value="Ameryka Północna">Ameryka Północna</option>
            <option value="Azja">Azja</option>
            <option value="Europa">Europa</option>
            <option value="Oceania">Oceania</option>
        </select> <br>
        populacja: <input type="number" min="0" name="populacja"> <br>
        czy demokratyczna: <input type="checkbox" name="demokracja"> <br>
        <input type="submit">
    </form>
</body>
</html>