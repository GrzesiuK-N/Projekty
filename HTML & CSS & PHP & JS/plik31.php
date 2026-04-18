<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 - 3</title>
</head>
<body>
   <form action="plik31.php" method="get">

     miesiac[mi]: <input type="number" name="miesiac"> 

      </from> <br>

      <input type="submit" value="Wyslij">
    <?php
          $miesiac = $_GET['miesiac'];
          for ('<ul>' . $i = 1; $i <= $miesiac; $i++) {
 
          echo ('<li>' . $i . 'marca' . '</li>' . '</ul>');
          }


    ?>
    
</body>
</html>