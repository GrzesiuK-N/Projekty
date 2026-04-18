<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tlo_php.css">
    <title>kfc</title>
</head>
<body>
    
    <?php
       // $_SESSION['login'] oraz $_COOKIE['login']


        echo ('<form>');
            echo ('<input name="tytul" type="text" value="">'.'<br>');
            echo ('<textarea name="opis"> </textarea>'.'<br>');
            echo ('<input name="ocena" type="range" min="0" max="10">');

        echo ('</form>');
       /*  if (isset($_COOKIE['jezyk'])) {

        if ($_COOKIE['jezyk'] == 'polski') 
        }
        */
    ?>

</body>
</html>