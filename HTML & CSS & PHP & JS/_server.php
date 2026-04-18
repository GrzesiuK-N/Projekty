<?php

if(isset($_POST['action'])&&isset($_POST['name'])&&($_POST['action']=="make_game")&&(isset($_POST['cats']))){
    session_start();
    session_id("qz42:g");
    if(!isset($_SESSION['qz'])){
        $_SESSION['qz'] = [];
    }
    $as = $_POST['name'] . random_int(0,2049);
    $_SESSION['qz']["qz42:" . $as  ] = [
        "name" => $_POST['name'],
        "uname" => $as,
        "cats" => $_POST['cats'],
        "players" => [],
        "game" => [
            "scorebord" => [],
            "questions" => [],
            "round" => 0,
            "turns" => 0,
            "max_rounds" => -1, 
            "max_turns"  => -1,
        ]
    ];
}


?>