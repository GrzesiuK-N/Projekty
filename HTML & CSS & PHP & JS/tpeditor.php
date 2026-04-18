<?php
    include_once("../connect.php");
    $refresh = true;
    
    
    if(isset($_POST['video_id'])){
        $prop_id  = mysqli_escape_string($conn,$_POST['key']);
        $prop_val = mysqli_escape_string($conn,$_POST['content']);
        $video_id = mysqli_escape_string($conn,$_POST['video_id']);
        $res = mysqli_query($conn,"UPDATE tplayer SET $prop_id = '$prop_val' WHERE video_id = '$video_id'") or die(mysqli_error($conn));
        echo "420";
        die();
    }

    else if($_GET['video_id']){
        include_once("../connect.php");
        $id = $_GET['video_id'];
        $res = mysqli_query($conn,"SELECT * FROM tplayer WHERE video_id = '$id'");
        $row = mysqli_fetch_assoc($res);
        echo(json_encode($row));
        die();
    }
    /*
    session_id(-99);
    session_start();
    if (isset($_SESSION['time'])){
        if (($_SESSION['time']-time())>360*12){
            include_once('mytapi.php');
            $_SESSION['time']=time();
        }
    }else{
        $_SESSION['time']=time();
    }*/
    
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="/echo/fw.css">

<script>
function request_video_data(video_id){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        //'voice', 'softvoicen', 'novoice', 'acapela'
        console.log(this)
        document.getElementById("ab").value = this.response.author_name;
        document.getElementById("type").value = this.response.type;
        document.getElementById("md").innerHTML = this.response.custom_data;
        }
    xhttp.open("POST", `tpeditor.php?video_id=${video_id}`, true);
    xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
    xhttp.responseType = "json";

    xhttp.send();
}

function send_update(video_id,key,content,el){
    var http = new XMLHttpRequest();
    var url = 'tpeditor.php';
    var params = `video_id=${video_id}&key=${key}&content=${content}`;
    console.log(params)
    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            if (http.responseText=="420"){
                el.style.color = 'lime'
            } else{
                el.style.color = 'red'
                console.log(http.responseText)
            }
        }
    }
    http.send(params);
}

function filter_video(argument, filter_by){
    nodes = document.getElementById("videos").childNodes[2].childNodes
    console.log(argument,filter_by)
    if (argument==='0'){
        console.log(42)
        filter_by = (argument,node) => false
    }else{
        filter_by =filter_by || ((argument,node) => !(node.children[1]?.children[0].value==argument))
    }
    for (const i of nodes){
        if (i.nodeName=='#text'){continue}
        if (filter_by(argument,i)){
            i.style.display='none'
        }else{
            i.style.display=''
        }
    }
}
</script>
</head>
<body>
<?php
if( !isset($_GET['pid'])){
    $pid = 'PLseEB4y99wAYKLQILDz3V3mAmNulxfQ9U';
}else{
    $pid = $_GET['pid'];
}
echo "<h1>$pid</h1>";
$data = json_decode(file_get_contents("$pid.pl.json"));
$video_table = "<table id='videos' style='width:80%;padding:0;'>\n
<thead><tr><td>Tytuł</td><td>Dodano</td><td>Typ</td><td>Wyświetlono</td><td>Metadane</td></tr></thead><tbody>";
$res = mysqli_query($conn,'SELECT DISTINCT type FROM tplayer');
$video_types = [];
foreach ($res as $key => $value) {
    array_push($video_types,$value['type']);
    
}

$res = mysqli_query($conn,'SELECT DISTINCT author_name FROM tplayer');
foreach ($res as $key => $value) {
    $users[$value['author_name']]=0;
    
}
for ($i=0; $i < count($data) ; $i++) { 
    $row = $data[$i];
    $video_id = $row->resourceId->videoId;
    $video_title = $row->title;
    $added_by= $row->added_by;
    $vtype = $row->type;
    $vcount = $row->view_count;
    $meta = $row->meta_data;
    $user_set = ((in_array($added_by,array_keys($users))));
    
    $users[$added_by]++;

    $css = $added_by=="DraMori / JCM"  ? "color:red;font-size:150%" : "" ;
    $oadded = $added_by;
    $added_by = $added_by=="DraMori / JCM"  ? "Not Set" : $added_by ;
    $voice_data = "";
    foreach ($video_types as $key => $value) {
        $sel = ($value==$vtype) ? "selected='selected'" : "" ;
        $voice_data .= "\n\t\t\t <option $sel>" . $value  . '</option>'; 
    }
    $added_selector = "<select onchange=\"send_update('$video_id','author_name',this.value,this)\">\n";
    foreach ($users as $user => $count){

        $sel = ($user==$oadded) ? "selected='selected'" : "" ;
        $added_selector .= "<option $sel value='$user'>$user</option>";
    }
    $added_selector . "</select>";


    $video_table .= "\n\t" . "<tr style='$css'><td>$video_title</td><td>$added_selector</td><td>\n\t\t<select value='$vtype' onchange=\"send_update('$video_id','type',this.value,this)\">$voice_data</select></td><td>$vcount</td><td><textarea style='resize:vertical;height:fit-content;' onchange=\"send_update('$video_id','custom_data',this.value,this)\">$meta</textarea></td></tr>";
    /*
    $id = $data[$i]->resourceId->videoId;
    $name = $data[$i]->title;
    echo($id);
    echo($name);
    */

}
?>

<div style="float:right;width:20%;position:sticky;top:5px">
    <input name='user-filter' value='0' type='radio' oninput="filter_video('0')"><label for="0" style="font-size:15px;">NO FILTER</label>
    <table style="width:100%;padding:0px;">
        <thead><td>user</td><td>count</td></thead>
        <tr style="color:red">
            <td ><input name="user-filter" type='radio' value="Not Set" oninput="filter_video('DraMori / JCM')">Not Set</td><td color="red"><?php echo $users['DraMori / JCM'];?></td>
        </tr>
        <?php
        foreach (array_keys($users) as $user) {
            $c = $users[$user];
            if ($user=='DraMori / JCM'){
                continue;
            }
            echo "<tr><td><input name='user-filter' value='$user' type='radio' oninput='filter_video(\"$user\")'><label for='$user'>$user<label></td><td>$c</td></tr>";
        }
        ?>
</table>
<a style="float:right;"  href="../fw.yt.php?pid=<?php echo $pid; ?>">refresh</a>
</div>
Wyszukaj: <input type="text" oninput="filter_video(this.value,(argument,node)=>!(node.innerText.toLocaleLowerCase().includes(argument.toLocaleLowerCase())))">

<?php echo($video_table)?>
</body>
</html>