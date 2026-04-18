<?php 
error_reporting(E_ALL & ~E_NOTICE);
apcu_add("que",[]);
apcu_add("cocounter",0);



if(isset($_GET['gc'])){
    echo(json_encode(apcu_fetch("que")));
    exit();
}
if(isset($_GET['sup'])){
    echo(json_encode(apcu_fetch("cocounter")-1));
    exit();
}
if(isset($_POST['action'])){
    $CCC = apcu_fetch("cocounter");
    $que = apcu_fetch("que");
    $que[] = "$CCC.".$POST['action'];
    $que = array_slice($que,-5);
    apcu_cas("que",$que);
    apcu_inc("cocounter");
}
if(isset($_POST['add'])){
    include_once('../../connect.php');
    $video_id = mysqli_escape_string($conn,$_POST['add']);
    var_dump($conn);
    echo $video_id;
    $q="UPDATE tplayer SET played = played + 1 WHERE video_id = '$video_id'";
    echo($q);
    $res = mysqli_query($conn,$q) OR die(mysqli_error($conn));
    echo($res);
    die();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wirless</title>
    <link rel="stylesheet" href="tp.asset/css">
</head>
<body>
    <form action="cue.php" method="post">
        <button type="submit" name="action" value="pl">play</button>
        <button type="submit" name="action" value="st">stop</button>
        <button type="submit" name="action" value="<">prev</button>
        <button type="submit" name="action" value=">">next</button>
    </form>
    <br>    
</body>
</html>
