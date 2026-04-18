<?php
include_once("connect.php");
if (isset($_POST['id'])){
    $id = $_POST['id'];
    $tytul = $_POST['tytul'];
    $tresc = $_POST['tresc'];
    $autor = $_POST['autor'];
    $grafika = $_POST['grafika'];
    mysqli_query($conn,"UPDATE artykul SET tytul='$tytul', tresc='$tresc', autor='$autor', grafika='$grafika' WHERE id = $id");
    echo '<script>alert("Wyedytowano pomyślnie")</script>';
} else if(isset($_GET['id'])){
    $id = $_GET['id'];
} 
$data = mysqli_query($conn,"SELECT * FROM artykul WHERE id = $id") or die("<h1>U Mother Mother</h1>");

if (mysqli_num_rows($data)==1){
    $row = mysqli_fetch_assoc($data);
    $tytul = $row['tytul'];
    $tresc = $row['tresc'];
    $autor = $row['autor'];
    $grafika = $row['grafika'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj <?php echo $tytul;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
        autor: <input type="text" name="autor" value="<?php echo $autor;?>"> grafika: <input type="text" name="grafika" value="<?php echo $grafika;?>"> Tytuł: <input type="text" name="tytul" value="<?php echo $tytul;?>"> <br>
        Treść: <br>
        <textarea name="tresc"><?php echo ($tresc);?></textarea>
        <input type="hidden" name="id" value="<?php echo($id);?>">
        <input type="submit" value="Edytuj!">
    </form>
</body>
</html>