<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>jeszcze nie wiem </title>
<html lang= "PL-pl">
<link rel="stylesheet" href="styl6.css">
<style>
table{
    border: 1px solid black;
}
td{
    border: 1px dotted black;
}
</style>
</head>

<body>
<header>
a 
</header>

<section class="a">

<form action="2d.php" method="get">

<p>Podaj pierwsza Liczbe: <input type="number" name="pierwsza" id="pierwsza" /></p>
<p>Podaj pierwsza Liczbe: <input type="number" name="druga" id="druga" /></p>




<p>Podaj pierwsza Liczbe: <input type="number" name="h" id="h" /></p>


<select name="a" id="1" title="q">
<option name="a" value="1">parzste  (dziala)</option>
<option name="a" value="2">podzielne przez 3 lub 5  (dziala )</option>
<option name="a" value="3">podzielne przez 7 i 11  (dziala)</option>
<option name="a" value="4">wypisuje liczby z kolumny n  (nie dziala)</option>
<option name="a" value="5">wypisuje liczby z wiersza m  (nie dziala)</option>
<option name="a" value="6">obl sume liczb w  tablicy  (dziala)</option>
<option name="a" value="7">wypisuje najmniejsza i najwieksza liczbe w tablicy  (nie dziala)</option>
<option name="a" value="8">sumuje liczby o indexie parzystym  (nie dziala)</option>
<option name="a" value="9">wypisuje średnia arytmetyczna  (dziala)</option>
<option name="a" value="10">wypisuje liczby z najdłuższej przektnej  (nie dziala)</option>
<option name="a" value="11">zlicza ilość wystapień w  tablicy podanej liczby h  (dziala)</option>
</select>
<input type="submit"  name="wyslij" value="wyslij">

</form>




</section>


<section class="b">
<?php
if(isset($_GET['wyslij'])){
$a=$_GET["pierwsza"];
$b=$_GET["druga"];
echo ("podaj 1 liczbe ".$_GET["pierwsza"]."<br>");
echo ("podaj 2 liczbe ".$_GET["druga"]."<br>");
$znak = $_GET['wyslij'];
$wybor=$_GET['a'];
$h=$_GET["h"];
echo ("podaj n/m liczbe ".$_GET["h"]."<br>");

$t2d = array();
echo ("<table>");
for($i=0; $i<7; $i++){
    $t2d[$i]=[];
    echo ("<tr>" );
    for($j=0; $j<15; $j++){
        $liczba = random_int($a,$b);
        $t2d[$i][$j]=$liczba;
        echo("<td> ".$liczba."</td>");
    }
    echo ("</tr>");
}
echo ("</table> <br>");
}
switch($wybor){


case 1:
for ($i=0; $i < 7; $i++) {
for ($j=0; $j < 15; $j++) {
    $e=$t2d[$i][$j];
    if (($e%2)==0){
        echo ($e." ");
    }
}
}break;



case 2:

for ($i=0; $i < 7; $i++) {
for ($j=0; $j < 15; $j++) {
  $e=$t2d[$i][$j];
if ($e%3==0 || $e%5==0){
echo ($e." ");
}}}
break;



case 3:

for ($i=0; $i < 7; $i++) {
for ($j=0; $j < 15; $j++) {
$e=$t2d[$i][$j];
if ($e%7==0 && $e%11==0){
echo ($e." ");
}}}
break;



case 4:


for ($i=0; $i < 7; $i++) {
    for ($j=0; $j < 15; $j++) {
        $e=$t2d[$i][$j];
        if($h==$j){
            echo ($e." ");
        }
    }}
break;


case 5:
echo"plz";
break;









case 6:
$count = 0;
$sum = 0;
for ($i=0; $i < 7; $i++) {
for ($j=0; $j < 15; $j++) {
$e=$t2d[$i][$j];
if (($count%2)==0){
$sum = $sum + $e;
 
}
$count++;
  }
}
echo("$sum");
break;

case 7:
$lowest = $b;
$highest = $a;
for ($i=0; $i < 7; $i++){
for ($j=0; $j < 15; $j++) {
    $e=$t2d[$i][$j];
    if ($e<$lowest){
        $lowest = $e;
    }
    if ($e>$highest){
        $highest = $e;
    }
}
}
echo "l$lowest ; h$highest";
break;

case 8:
$sum = 0;
for ($i=0; $i < 7; $i++) {
    for ($j=0; $j < 15; $j++) {
        $e=$t2d[$i][$j];
        if (($j+$i)%2==0){
            $sum = $sum + $e;
        }  
        $count++;
        }
    }
echo $sum;
break;


case 9:
 

$count = 0;
$sum = 0;
$art = 0;
for ($i=0; $i < 7; $i++) {
for ($j=0; $j < 15; $j++) {
    $e=$t2d[$i][$j];
    $sum = $sum + $e;
    $count++;
  }
}
$art = $sum / (15*7);
echo("$art");
break;


case 10:




$count = 0;
$sum = 0;
for ($i=0; $i < 7; $i++) {
    for ($j=0; $j < 15; $j++) {
        $e=$t2d[$i][$j];
        if ($e==$h){
        $count++;
        }
    }
}
echo("$count");
break;


case 11:
echo"plz";
break;
}
?>




</section>

<footer>
tak <?php echo(rand($_POST["pierwsza"],$_POST["druga"])); ?>

</footer>

</body>
</html>