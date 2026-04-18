<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sytlesheet" href="przedszkole.css"> 
    <title>Edycja</title>
</head>
<body>

<?php

    if (isset($_POST['imie']) and $_POST['imie']!="") {

        $polaczenie = mysqli_connect('localhost', 'root', '', 'przedszkole');
        //1 
        $id_dziecka = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['id_dziecka']));
        //2
        $imie = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['imie']));
        //3
        $nazwisko = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['nazwisko']));
        //4
        $pesel = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['pesel']));
        //5
        $data_ur = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['data_ur']));
        //6
        $miasto = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['miasto']));
        //7
        $grupa = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['grupa']));
        //8
        $zdrowie = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['zdrowie']));
        //9
        $telefon = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['telefon']));
        //10
        $email = htmlspecialchars(mysqli_real_escape_string($polaczenie, $_POST['email']));

        $sql = "UPDATE dzieci SET imie = '$imie', nazwisko = '$nazwisko', pesel = '$pesel', data_ur = '$data_ur', miasto = '$miasto', grupa = '$grupa', zdrowie = '$zdrowie', telefon = '$telefon', email = '$email' WHERE id_dziecka = '$id_dziecka'";

        $result = mysqli_query($polaczenie,$sql) or die("błąd aktualizacji danych");

        echo("dziecko $imie $nazwisko zaktualizowanie!");

        mysqli_close($polaczenie);
    }

    else {
        echo("nie przesłano danych do edycji dziecka!");
    }

?>
    
</body>
</html>