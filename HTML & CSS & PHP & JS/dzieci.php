<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
     $sql = "SELECT * FROM dzieci";

        while ($row = mysqli_fetch_row($result)) {
            echo ( "".$row['grupa'])
        }
    ?>

</body>
</html>