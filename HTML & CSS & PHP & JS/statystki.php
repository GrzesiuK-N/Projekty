<?php
include_once('../connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statystkiki</title>
    <style>
        *{
            color: white;
            font-size:18pt;
        }
        body{
            background-color: black;
        }
        h2{
            font-size: 32pt;
            color: red;
        }
        table{
            inset: 0;
            border: 2px dashed white;
        }
        td{
            border: 1px solid salmon
        }
        tr > *{
            border-right: 2px solid salmon;
        }
        tr >*:last-child{
            border-right: 0;
        }
    </style>
</head>
<body>
    <?php
    $result = mysqli_fetch_row(mysqli_query($conn,'SELECT SUM(duration*played),SUM(played) FROM tplayer;'));
    $total_duration = $result[0];
    $total_views    = $result[1];
    ?>
    <h2>Odtworzono <?php var_dump(((float)$total_duration/(60*60))) ?> godzin</h2>
    <h2>Odtworzeń <?php echo $total_views ?> </h2>
    <h2>Most played song</h2>
    <table>
        <tr><th>video name</th><th>vievw</th><th>view%</th><th>time%</th><th>total viev time</th></tr>
        <?php
        $data= json_decode(file_get_contents('./playlist.json'));
        foreach ($data as $snippet) {
            $total_time = ($snippet -> view_count) * ($snippet -> cd -> duration);
            echo "<tr><td>" . $snippet -> title . "</td>";
            echo "<td>" . $snippet -> view_count . "</td>";
            echo "<td>" . round($total_time/$total_duration,3) . "% czasu ;" . round(($snippet->view_count)/($total_views),3) ."% wyświetleń</td>";
            echo "<td>" . $total_time . '</td></tr>';
        }
        ?>

    </table>
</body>
</html>