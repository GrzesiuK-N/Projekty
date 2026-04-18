<?php
require_once("connect.php");
if (isset($_POST['id'])&(isset($_POST['sure']))){
    $sure = $_POST['sure'];
    $id   = $_POST['id'];
    if ($sure==1){
        mysqli_query($conn,"DELETE FROM artykul WHERE id = $id") or die("niepowiodło się");
        echo '<script>alert("usunięto pomyślnie!")</script>';
    }
}else if (isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        ustaw 1 żeby potwierdzić swoją decyzje:
        <input type="range" name="sure" value="0" min="0" max="2">
        <input type="hidden" name="id" value="<?php echo $id?>"> <br>
        <input type="submit" value="USUŃ">
    </form>
</body>
</html>