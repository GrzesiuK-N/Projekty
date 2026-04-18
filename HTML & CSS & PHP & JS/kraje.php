<?php
echo("<h1>Hello, world!</h1>");
include_once('/echo/connect.php');
if ($conn!=false){
    echo('42!');
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$sql = "SELECT * FROM kraje";
$result = mysqli_query($conn,$sql) or die('ur_mother');
?>
<table>
    <thead><td>Nazwa</td><td>Populacja</td><td>Dostęp do moża</td></thead>
    <tbody>
<?php
echo('422');
while ($row = mysqli_fetch_assoc($result)) {
     $nazwa = $row['nazwa'];
     $populacja =$row['populacja'];
     $dostemp_do_morza = ($row['dostemp_do_morza']==1) ? 'tak' : 'nie' ; 
     echo  "<tr>\n";
     echo  "\t<td>$nazwa</td>\n";
     echo  "\t<td>$populacja</td>\n";
     echo "\t<td>$dostemp_do_morza</td>\n";
     echo "</tr>\n";
}
?>
</tbody>
</table>