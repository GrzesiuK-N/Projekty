<?php
include_once("../connect.php");
error_reporting(0);
ini_set('display_errors','false');
$yt_key = 'AIzaSyCErQuM8ZQbEnauXGiXfQ6O3nOaHmDMmCk';
if( !isset($_GET['pid'])){
    $pid = 'PLseEB4y99wAYKLQILDz3V3mAmNulxfQ9U';
}else{
    $pid = $_GET['pid'];
}
$base_request = "https://www.googleapis.com/youtube/v3/playlistItems?playlistId=$pid&part=snippet,contentDetails&key=$yt_key&maxResults=50";

function request_playlist($base_request,$page){
    $append = "";
    if ($page!=null){
        $append="&pageToken=$page";
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $base_request . $append);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function request_video($vid,$page=null){
    global $yt_key;
    $url = "https://www.googleapis.com/youtube/v3/videos?id=$vid&part=contentDetails&key=$yt_key&maxResults=1";
    if ($page!=null){
        $append="&pageToken=$page";
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}
function sanitize($sum,$conn){
    $new_sum = [];
    foreach ($sum as $key => $value) {
        $snippet = $value -> snippet;
        $video_id = $snippet->resourceId->videoId;
        
        $q = "SELECT * FROM tplayer WHERE video_id = '$video_id'";
        //echo($q);
        $data = mysqli_query($conn,$q);
        if($data===false){
            echo mysqli_error($conn);
            die();
        }
        if (mysqli_num_rows($data) == 0){
            $q = "INSERT INTO tplayer (video_id, author_name, type, custom_data) VALUES ('$video_id','DraMori / JCM','voice','{}')";
            $data = mysqli_query($conn,$q);
            if($data===false){
                echo mysqli_error($conn);
                die();
            }
            $snippet -> added_by  = "DraMori / JCM";
            $snippet -> type      = "voice";
            $snippet -> meta_data = "{}";
            $snippet -> view_count= 0;
            $snippet -> cd = [];
            $snippet -> cd['duration'] = 0;
        }else{
            $row = mysqli_fetch_assoc($data);
            $snippet -> added_by  = $row["author_name"];
            $snippet -> type      = $row["type"];
            $snippet -> meta_data = $row["custom_data"];
            $snippet -> view_count= $row['played'];
            $snippet -> cd = [];
            $snippet -> cd['duration'] = $row['duration'];
        }
        if (($row['duration']==0)){
            $contentDetails = json_decode(request_video(($video_id)));
            $snippet -> cd = [];
            $string = substr($contentDetails->items[0]->contentDetails->duration,2);
            $uf = preg_split('/[MS]/',$string);
            if(count($uf)==3){
                $xd = ((int)$uf[0])*60+((int)$uf[2]); 
            }else{
                var_dump($uf);
            }
            $sql = "UPDATE tplayer SET duration = $xd WHERE video_id = '$video_id'";
            mysqli_query($conn,$sql);
            $snippet -> cd['duration']= ($xd);
        }
        $new_sum = array_merge($new_sum,[$snippet]);
    }

    return $new_sum;
}

$origin = request_playlist($base_request,null);
$sum = json_decode($origin) -> {"items"};
$list = json_decode($origin);
while(($list->nextPageToken)!=null){
    $res = request_playlist($base_request,$list->{"nextPageToken"});
    $sum = array_merge($sum,json_decode($res)->{"items"});
    $list = json_decode($res);
}
if(!isset($_GET['get'])){
    file_put_contents("$pid.pl.json",json_encode(sanitize($sum,$conn)));
}else{
    echo json_encode(sanitize($sum,$conn));
    $refresh=true;
}
if(!isset($refresh)) {header("location: framwork/tpeditor.php");

die();}
