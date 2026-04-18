<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(!isset($_SESSION['answear'])|!isset($_SESSION['try'])){
    $_SESSION['answear'] = [random_int(1,6),random_int(1,6),random_int(1,6),random_int(1,6),random_int(1,6)];
    $_SESSION['try'] = 24;
}
if(isset($_GET['question'])){
    if($_SESSION['try']==0){
        $ans = $_SESSION['answear'];
        session_destroy();
        die('-1;-1;'.implode('',$ans));
    }
    $full = 0;
    $part = 0;
    for($i=0;$i<=4;$i++){
        if ($_GET['question'][$i]==$_SESSION['answear'][$i]){
            $full++;
        }elseif(in_array($_GET['question'][$i],$_SESSION['answear'])){
            $part++;
        }
    }
    $_SESSION['try']--;
    die($full . ';' . $part. ';'.$_SESSION['try']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alchemybroker</title>
    
    <script>
        window.onload = ()=>{
            document.getElementById('check').onclick = ()=>{
                p =  document.getElementsByClassName('p')
                whole = ""
                console.log(whole,p)
                for(let i=0;i<=4;i++){
                   whole += p[i].value
                }
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    
                    $a = this.response.split(';')[0]
                    document.getElementById('f').innerHTML = $a;
                    $b = this.response.split(';')[1]
                    document.getElementById('h').innerHTML = $b;
                    document.getElementById("W").innerHTML = this.response.split(';')[2]
                    if ($a==-1){
                        alert("ulooser")
                    }
                    }
                xhttp.open("GET", `alchbroker.php?question=${whole}`, true);
                xhttp.setRequestHeader("Access-Control-Allow-Origin","*")
                xhttp.responseType = "raw";

                xhttp.send();
            }
        }

    </script>
</head>
<body>
    <h2>Alchemybroker</h2>
    <input type="number" min="1" max="6" class="p">
    <input type="number" min="1" max="6" class="p">
    <input type="number" min="1" max="6" class="p">
    <input type="number" min="1" max="6" class="p">
    <input type="number" min="1" max="6" class="p">
    <button id="check">1111</button> <br>
    prawidłowe: <span id="f"></span> <br>
    pół-prawidłowe: <span id="h"></span> <br>
    pozostałych prub: <span id="W">24</span>
</body>
</html>