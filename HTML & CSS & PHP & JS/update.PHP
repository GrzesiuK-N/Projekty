<?php
$post = false;
require("connect.php");
if(!(isset($_GET['id'])||isset($_POST['id']))){
    header("Location: index.php");
}elseif(isset($_POST['id'])){
    $post = true;
    $id = $_POST['id'];
    $id_ = mysqli_escape_string($conn,$_POST['id']);
    $nazwa = mysqli_escape_string($conn,$_POST['nazwa']);
    $kontynent = mysqli_escape_string($conn,$_POST['kontynent']);
    $populacja = mysqli_escape_string($conn,$_POST['populacja']);
    $czy_demokracja = isset($_POST['demokracja']);
    mysqli_query($conn,"UPDATE kraje SET nazwa='$nazwa', kontynent='$kontynent', populacja='$populacja', czy_demokratyczny='$czy_demokracja' WHERE id_kraju=$id_") or die("what?");
    //echo "UPDATE kraje SET nazwa='$nazwa', kontynent='$kontynent', populacja='$populacja', czy_demokratyczny='$czy_demokracja' WHERE id_kraju=$id";
} else{
    $id = $_GET['id'];
}
$row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM kraje WHERE id_kraju=$id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj</title>
    <style>
        body{
            background-color: black;
            color: antiquewhite;
            font-family: Verdana;
            font-size:18px;
        }
        form{
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
<form method="post">
        nazwa kraju: <input type="text" name="nazwa" value="<?php echo $row['nazwa']?>"> <br>
        kontynent: <select name="kontynent">
            <option value="Afryka">Afryka</option>
            <option value="Ameryka Południowa">Ameryka Południowa</option>
            <option value="Ameryka Północna">Ameryka Północna</option>
            <option value="Azja">Azja</option>
            <option value="Europa">Europa</option>
            <option value="Oceania">Oceania</option>
        </select> <br>
        populacja: <input type="number" min="0" name="populacja" value="<?php echo $row['populacja']?>"> <br>
        czy demokratyczna: <input type="checkbox" name="demokracja" <?php echo ($row['czy_demokratyczny'])=='1'?'checked':'' ?> > <br>
        <input type="hidden" name="id"value=<?php echo $_GET['id'] ? $_GET['id'] : $_POST['id'] ?> >
        <input type="submit">
    </form>
</body>
</html>
