<?php
session_set_cookie_params([
        'path' => '/echo/techniplayer/editor'
]);

session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: /echo/techniplayer/editor/login.php");
    die();
}
if(isset($_SESSION['user_id']) && isset($_POST['video_link'])){
    require_once('../yt_lib.php');
    require_once("../../connect.php");
    $video_id = parse_yturl($_POST['video_link']);
    $v= mysqli_query($conn,"SELECT video_id FROM tplayer2_tracks WHERE video_id = '$video_id'");
    if(mysqli_num_rows($v)>0){
        die('video already in db!');
    }

    $user_id = $_SESSION['user_id'];
    $video_data = get_video_data($video_id);
    $string = substr($video_data->contentDetails->duration,2);
    $split_time = preg_split('/[MS]/',$string);
    if(count($split_time)== 3){
        $duration = ((int)$split_time[0])*60+((int)$split_time[2]); 
    }else if(count($split_time)== 2){
        $duration = ((int)$split_time[0]);
    }else{
        var_dump($split_time);
        die('');
    }

    $metadata = [
        'title' => $_POST['meta_title'] ? $_POST['meta_title'] : $video_data->snippet->title,
        'author' => $_POST['meta_author'] ? $_POST['meta_author'] : $video_data->snippet->channelTitle,
        'meta' => json_decode($_POST['meta_meta']),
    ];
    $metadata_json = mysqli_escape_string($conn,json_encode($metadata));

    $result = mysqli_query($conn,"INSERT INTO tplayer2_tracks (video_id,duration,meta_data,added_by) VALUES ('$video_id','$duration','$metadata_json','$user_id')");
    echo "".mysqli_error($conn);




}
$meta_meta = "";
$meta_title = "";
$meta_author = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add track</title>
    <link rel="stylesheet" href="editor.css">

</head>
<body>
    <h1>Add track</h1>
    <form action="" method="post">
        <label for="video_link">Video link:</label><input type="text" name="video_link" id="video_link" placeholder="(yt-link)" required>
        <?php
        include_once("metadata_template.php");
        ?> 
        <label for="background">Nie nadaje się do słuchania w tle:</label><input type="radio" name="background" id="background_no" value="0" checked> <br>
        <label for="background">Nadaje się do słuchania wtle:</label><input type="radio" name="background" id="background_yes" value="1"> <br>
        <button>Dodaj</button>
    </form>
</body>
</html>