<?php
if ((!isset($_GET['pwd']))|(!isset($_GET['lvl']))){
    header("location: cdungeons.html?pwd=1&lvl=0");
    die();
}else{
    include_once("./levels.php");
    $lvl = $_GET['lvl'];
    $pwd = $_GET['pwd'];
    if ($lvl!=0){
        if (!is_right($pwd)){
            '1' -1 ;
            header("location: cdungeons.html?pwd=1&lvl=0");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bo wierze, że nie ma czegoś takiego jak zadużo zasad!</title>
    <!--Warning this game is venums-->
    <style>
        *{
            background-color: black;
            color:whitesmoke;
            font-size: medium;
        }
    </style>
</head>
<body>
    <h1>Witaj w Przeklętych lochach</h1>
    <p>Uwaga! Ta gra jest zbyt złożona żeby zrobić do niej tutorial, zamiast tego przeczytaj <a href='apps/curseddungeons/rulebook.html'>KSIĘGĘ ZASAD</a></p>
    Jak to działa? Proste każda zakadka składa się z jednego INPUTA typu PASSWORD, które przekazujesz za pomocą przycisku <br>
    Jeżeli zgadłeś hasło, przechodzisz dalej w przeciwnym wypadku cofasz się o 1 poziom!
    
    
</body>
</html>