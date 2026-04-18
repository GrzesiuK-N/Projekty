<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka dzieci</title>
</head>
<body>

<main>

    <h1> Tytuł Tytułu O tytule Tytułu</h1>

    <form method="GET" action="wyszukiwarka.php">
        szukaj: <input type="search" name="szukane">        
</form>
<br>

<?php
    if(isset($_GET['szukane']) and $_GET['szukane']!="") {
    $szukane = $_GET['szukane'];
    $polaczenie = mysqli_connect('localhost', 'root', '', 'przedszkole');

    $sql = "SELECT * FROM dzieci WHERE imie LIKE '%$szukane%' OR nazwisko LIKE '%$szukane%' OR grupa LIKE'%$szukane%' ";

    $result = mysqli_query($polaczenie, $sql);

    while ($row = mysqli_fetch_row($result)) {
        echo ($row[0] . " " . $row[2]. "grupa: " . $row[4] . "data_ur.: " . $row[6] . "<br> <br> ");
    }

    mysqli_close($polaczenie);
}

?>

</main>
    
</body>
</html>