<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mnożenie</title>
</head>
<body>
    <?php
    error_reporting(32767);
    ini_set('display_errors','true');
    $a = random_int(5,15);
    $b = random_int(5,15);
    ?>
    <h1> Mnożeie php</h1>
    <?php
    if(isset($_POST['a'])&&isset($_POST['b'])&&isset($_POST['ans'])){
        if($_POST['ans']==(intval($_POST['a'])*intval($_POST['b']))) echo('<h2 style="color:lime;">Dobra odpowiedź ' . $_POST['a'] . "*" . $_POST['b'] . "= " . $_POST['ans'] . "</h2>");
        else echo('<h2 style="color:red;">zła odpowiedź ' . $_POST['a'] . "*" . $_POST['b'] . "!= " . $_POST['ans'] . " (powinno być: " . intval($_POST['a'])*intval($_POST['b']) . ")</h2>");
    }
    ?>
    <form method="post">
        Twoje działanie:  <?php echo $a?> * <?php echo $b?> = <input type="number" name="ans">
        <input type="hidden" name="a" value="<?php echo $a?>"><input type="hidden" name="b" value="<?php echo $b?>">
        <input type="submit">
    </form>

</body>
</html>