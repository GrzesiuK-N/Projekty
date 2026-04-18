<?php 
session_set_cookie_params([
        'path' => '/echo/techniplayer/editor'
]);
session_start();

if (isset($_SESSION['user_id'])){
    header('Location: /echo/techniplayer/editor/user_panel.php');
    die('');
}else{
    if (isset($_POST['username'])&&isset( $_POST['pwd'])){
        $username = $_POST['username'];
        $pwd = hash('sha256', $_POST['pwd'] . 's4l3tr4');
        include_once('../../connect.php');
        $user_result = mysqli_query($conn,"SELECT user_id,admin FROM tplayer2_users WHERE username = '$username' AND pwd = '$pwd'");
        if(mysqli_num_rows($user_result) == 1){
            $user_data = mysqli_fetch_assoc($user_result);
            $_SESSION["username"] = $username;
            $_SESSION["user_id"] = $user_data["user_id"];
            $_SESSION["is_admin"] = $user_data["admin"];
            header('Location: /echo/techniplayer/editor/user_panel.php');
        }else{
            die("wrong username or password!");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="editor.css">
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <label for="username">Username</label>
        <input type="text" name="username" id="username"> <br>
        <label for="pwd">Password</label>
        <input type="password" name="pwd" id="pwd"> <br>
        <button>Login</button>
    </form>
</body>
</html>