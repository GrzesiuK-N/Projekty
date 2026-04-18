<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyświetl opinie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Treść</th>
            <th>Wartość</th>
            <th>Data</th>
        </tr>
        <?php 
        $data = fopen("opinia.txt","r");
        while (!feof($data)){
            $line = fread($data,1000);
            $r = explode("\t",$line);
            echo "<tr>";
            foreach ($r as $cell) {
                $cell  = str_replace("\\n","\n",$cell);
                echo "<td>$cell</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>