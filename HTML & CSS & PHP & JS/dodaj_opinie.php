<?php
if(isset($_POST['xyz'])&&isset($_POST['op'])){
    $f = fopen("./opinia.txt",'a');
    fwrite($f, str_replace('\n',"\\n", $_POST['xyz']) . "\t" . $_POST['op'] . "\t" . date("Y-M-d H:i:s")) . '\n';
    fclose($f);
}else{
    die("Nie przesłano wsztkie danych");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinia Dodana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    Opinia zapisana - dziękujemy! <a href="wyswietl_opinie.php">wyświetl opinie</a>
</body>
</html>