<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuń</title>
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        require('connect.php');
        $id = mysqli_escape_string($conn,$_GET['id']);
        mysqli_query($conn,"DELETE FROM kraje WHERE id_kraju = $id") or die('<h1>Somthing went wrong!</h1>');
        echo "<h1>Succes</h1>";
    } 
    ?>    
</body>
</html>


