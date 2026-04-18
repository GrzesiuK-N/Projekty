<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y Logout page</title>
</head>
<body>

    <?php
        session_start();

        // usunięcie zmiennej sesji
        unset($_SESSION['logoin']);

        // zniszczenie całej sesji
        session_destroy();

        echo ('<h3> Logged out!</h3> ');
        echo ('<h3> <a "href=login.php">log in </h3>')

    ?>
    
</body>
</html>