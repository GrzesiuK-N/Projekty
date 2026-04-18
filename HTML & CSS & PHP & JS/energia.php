<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>energia1</title>
</head>
<body>
    
      <?php
          
          echo('<h1> dzien dobry! </h1>');

          $masa = $_POST['masa'] /1000;
          $predkosc = $_POST['predkosc'];

          $energia = round($masa * $predkosc * $predkosc / 2);        
          
          echo('<h2>energia wynosi: ' . $energia . 'J </h2>');
          

      ?>   

</body>
</html>