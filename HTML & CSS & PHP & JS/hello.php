<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dzien dobry</title>
</head>
<body>
    
      <?php
          
          echo('<h1> dzien dobry! </h1>');

          $droga = $_POST['droga'];
          $czas = $_POST['czas'] / 60;

          $predkosc = round($droga / $czas, 2);                                //= 30 / (1/3);
          
          // zlaczenie napisow - kontenacja
          echo('<h2>Predkosc wynosi: ' . $predkosc . 'km/h </h2>');

          

      ?>   

</body>
</html>