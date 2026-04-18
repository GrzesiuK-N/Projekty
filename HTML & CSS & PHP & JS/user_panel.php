<?php
session_set_cookie_params([
        'path' => '/echo/techniplayer/editor'
]);
session_start();
if (!isset($_SESSION['user_id'])){
    header('Location: /echo/techniplayer/editor/login.php');
    die('');
}else{
    $user_id = $_SESSION['user_id'];
    $admin = $_SESSION['is_admin'];
    include_once("../../connect.php");
    $users = [];
    $user_ =mysqli_query($conn,"SELECT * FROM tplayer2_users;") or die(mysqli_error($con));
    while($row=mysqli_fetch_assoc($user_)){
        $users[$row['user_id']] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
    <link rel="stylesheet" href="user_panel.css">
    <script>
        user_id = '<?php echo $user_id?>'
    </script>
</head>
<body>
    <header>
    <h1>User Panel</h1>
    Username: <?php 
    echo $_SESSION['username'];
    echo $admin ? '🔐' : '';
    ?>
    <a href="/logout.php">Logout</a>
    </header>
    <main>
        <div id="left">
            <table>
                <tr>
                    <th>Title</th>
                    <th>Added by</th>
                    <th>Author</th>
                    <th>Duration</th>
                    <th>Meta</th>
                    <th>BG</th>
                    <th>Playlists</th>
                </tr>
                <?php
                
                
                $tracks = mysqli_query($conn,"SELECT * FROM tplayer2_tracks ORDER BY added_by = '$user_id' DESC");
                while ($track = mysqli_fetch_array($tracks)) {
                    $video_id = $track['video_id'];
                    $added_by = $track['added_by'];
                    $metadata = json_decode($track['meta_data']);
                    $title  = htmlentities( $metadata->title) ;
                    $author =  htmlentities( $metadata->author);
                    $metameta = json_encode( $metadata->meta );
                    $duration = $track['duration'];
                    $option = "<select video_id=\"$video_id\" class=\"video_added_by\">\n";
                    $checked = $track['background']=="1" ? "checked" : "";
                    foreach ($users as $key => $value) {
                        $ousername = $value['username'];
                        $color_tag = $key == $user_id ? 'style="color:yellow;"' : "" ;
                        $selected = $added_by == $key ? "selected" : "";
                        $option .= "<option value=\"$key\" $color_tag $selected>$ousername</option>\n";
                    }
                    $option.="</select>";

                    echo "
                        <tr id=\"$video_id\">
                            <td><input type=\"text\" video_id=\"$video_id\" class=\"video_title\" value='$title'></input></td>
                            <td>$option</td>
                            <td><input type=\"text\" video_id=\"$video_id\" class=\"video_autohr\" value='$author'></input></td>
                            <td>$duration</td>
                            <td><textarea video_id=\"$video_id\" class=\"video_metameta\">$metameta</textarea></td>
                            <td class=\"bg_td\"><input type=\"checkbox\" $checked class=\"video_bg\"></input>
                            <td class=\"input_playlist\">tba</td>
                        </tr>
                    ";
                }
                ?>
            </table>
        </div>
        <div id="right"></div>
    </main>
</body>
</html>