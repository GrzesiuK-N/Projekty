<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DDDDDooooocccccuuuuummmmmeeeeennnnnttttt</title>
</head>
<body>
    <h1>Odliczanie:</h1>
    <?php

          $zmienna = "Poznan";

          /*
            petla for sklada sie z trzech czesci oddzielonych srednikami for (1 ; 2 ; 3) {
            
            }
            pierwsza czesc definiuje stan poczatkowy licznika petli

            licznik petli to specjalna zmienna,
            ktora bedzie sie zmieniala wraz z dzialaniem petli


            druga czesc definiuje do  KIEDY petla ma sie wykonac
            w naszym przykladzie petla sie wykonuje dopoki zmienna $i jest
            mniejsza lub rowna 42

            trzecia czesc mowi co ma sie dziac z licznikiem petli w kazdym kroku.
            Napis $i++ oznacza "w kazdym kroku petli zwieksz $i o jeden"
          */
          
        for ($i = 1; $i <= 42; $i = $i + 2) {
            echo($i . ' ' .  $zmienna .'<br>');
        }

    ?>

</body>
</html>
