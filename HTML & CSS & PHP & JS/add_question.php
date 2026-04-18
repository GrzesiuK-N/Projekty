<?php
include_once("tradesecret.php");
include_once("../../connect.php");

if(isset($_POST['q'])&&isset($_POST['name'])&&isset($_POST['pwd'])){
    $hashbrown = hash('sha256',$_POST['pwd'] . $SEC);
    $name = $_POST['name'];
    $res=mysqli_query($conn,"SELECT id,nazwa FROM qz_autorzy WHERE nazwa = '$name' AND pwd = '$hashbrown'");
    if (mysqli_num_rows($res)==1){
        $uuid = mysqli_fetch_row($res)[0];
        $quest = $_POST['q'];
        $cat_id = $_POST['cat'];
        $question = [$_POST['a1'],$_POST['a2'],$_POST['a3'],$_POST['ac']];
        $qq = mysqli_escape_string($conn,json_encode($question));
        $res = mysqli_query($conn,"INSERT INTO qz_pytania (pytanie,odp,category_id ,author_id) VALUES ('$quest','$qq',$cat_id,$uuid)") or die("error!");
        $r = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj pytanie do qz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    if(isset($r)){
        echo "<h3>Dodano pomyślnie!";
    };
    ?>
    <form method="post">
        <h2>Dodaj pytanie!</h2>
        Pytanie: <input type="text" name="q"> <br>
        Kategoria: <select name="cat">
            <?php
            include_once("../../connect.php");
            $res = mysqli_query($conn,"SELECT * FROM qz_category");
            while($row=mysqli_fetch_assoc($res)){
                $nazwa = $row['nazwa'];
                $id    = $row['id'];
                $symbol= $row['symbol'];
                echo "<option value=\"$id\">&#$symbol;$nazwa</option>";
            }
            ?>
        </select>
        Odpowiedzi: <br>
        Nie prawidłowa 1.<input name="a1" type="text"> <br>
        Nie prawidłowa 2.<input name="a2" type="text"> <br>
        Nie prawidłowa 3.<input name="a3" type="text"> <br>
        Prawidłowa: <input name="ac" type="text"> <br>
        Nazwa-użytkowika:<input name="name" type="text"> <br>
        PWD:<input name="pwd" type="text"> <br>
        <input type="submit" value="prześlij">
    </form>
</body>
</html>