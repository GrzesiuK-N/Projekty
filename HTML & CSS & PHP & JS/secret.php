<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y secret</title>
</head>
<body>

    <h1> Secret page - only for  </h1>

    <?php

        session_start();

        if (isset($_SESSION['login'])) {
            echo ("<h3> login: " . $_SESSION['login'] . "</h3>");
            echo ("your account: $1000000");
            echo ('<a "href=logout.php"> log out ');
            
        }
        else {
            echo ("<h3> ok </h3>");
        }

        if (isset($_POST['email']) and isset($_POST['date'])) {

        $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
        $date = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['date']));
        
        $sql = "SELECT * FROM users WHERE login = '$email' AND pass = '$date'";
        $result = mysqli_query($conn, $sql) or die ("ok")
                if (mysqli_num_rows($result) == 1) {
                echo ("<h2> Email: <input type='email' name='email'>  </h2>");

            }
        }
    ?>
    
</body>
</html>