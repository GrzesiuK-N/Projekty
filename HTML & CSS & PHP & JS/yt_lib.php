<?php
$yt_key = 'AIzaSyCErQuM8ZQbEnauXGiXfQ6O3nOaHmDMmCk';

/**
 *  Check if input string is a valid YouTube URL
 *  and try to extract the YouTube Video ID from it.
 *  @author  Stephan Schmitz <eyecatchup@gmail.com>
 *  @param   $url   string   The string that shall be checked.
 *  @return  mixed           Returns YouTube Video ID, or (boolean) false.
 */        
function parse_yturl($url) 
{
    $pattern = '#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com(?:/embed/|/v/|/watch\?v=|/watch\?.+&v=))([\w-]{11})(?:.+)?$#x';
    preg_match($pattern, $url, $matches);
    return (isset($matches[1])) ? $matches[1] : false;
}



function get_video_data($video_id){
    global $yt_key;
    $url = "https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&id=$video_id&key=$yt_key";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response);
    return $data->items[0];
}

if(isset($_GET["url"])){
    $video_id = parse_yturl($_GET['url']);
    var_dump(get_video_data($video_id));
}
?>