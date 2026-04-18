<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraje</title>
    <style>
        body{
            background-color: black;
            color:antiquewhite;
        }
        table{
            border-spacing: 0;
        }
        td{
            border: 1px solid salmon;
            
        }
        th{
            border-right: 2px solid white;
            padding:0 10px;
        }
        th:last-child{
            border-right:0;
        }
        a.button{
            border:1 solid gray;
            background-color: red;
            color:pink;
        }
    </style>
</head>
<body>
    <table>
        <tr><th>Nazwa</th><th>Kontynent</th><th>Populacja</th><th>Czy demokretyczne</th><th></th></tr>
    <?php
    require('connect.php');
    $sql = 'SELECT * FROM kraje';
    $result = mysqli_query($conn,$sql) or die('błąd zapytania');
    while($row=mysqli_fetch_row($result)){
        $id = $row[0];
        $nazwa = $row[1];
        $kontynent = $row[2];
        $populacja = $row[3];
        $demokracja = $row[4];
        echo "<tr><td>$nazwa</td><td>$kontynent<td>$populacja</td><td>$demokracja</td><td><a class='button' href='del.php?id=$id'>D</a>/<a class='button' href='update.php?id=$id'>U</a></tr>";
    };
    ?>
    </table>
</body>
</html>


