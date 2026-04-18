<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stronka 2</title>
</head>
<body>

    <?php

       $polaczenie = mysqli_connect('localhost', 'root', '', 'przedszkole');
       echo("połączenie się udało");
       $imie = $_POST['imie'];
       $nazwisko = $_POST['nazwisko'];
       $pesel = $_POST['pesel'];
       $data_ur = $_POST['data_ur'];
       $miasto = $_POST['miasto'];
       $grupa = $_POST['grupa'];
       $zdrowie = $_POST['zdrowie'];
       $telefon = $_POST['telefon'];
       $email = $_POST['email'];

       $sql = "INSERT INTO dzieci (imie, nazwisko, pesel, data_ur, miasto, grupa, zdrowie, telefon, email) Values ('$imie', '$nazwisko', '$pesel', '$data_ur', '$miasto', '$grupa', '$zdrowie', '$telefon', '$email')";
       $result = mysqli_query($polaczenie, $sql) or die("błąd zapytania MYSQL!");
       echo("<h1>dziecko $imie $nazwisko zostało zarejestrowane!</h1>");

       mysqli_close($polaczenie);
    ?>
    
</body>
</html>