<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link href="styl3.css" rel="stylesheet">
</head>
<body>
    <div id="container">
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>

    <div id="lewy">

        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona glowna</a></li>
            <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdz kwiaciarnie</a>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
            
            </li>
        </ol>
    </div>
 
    <div id="prawy">
         <h2>Znajdz kwiaciarnie</h2>
         <form method="post" action="znajdz.php"> 
            podaj nazwe miasta: <input type="text" name="nazwa">
            <input type="submit" value="sprawdz">

         <?php
         if (isset($_POST[3])) {
         $conn = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
         $nazwa = $_POST['nazwa'];
         $sql = "SELECT DISTINCT nazwa, ulica FROM kwiaciarnie where miasto' = '$nazwa'";
         $result = mysqli_query($conn, $sqli);
         while ($row = mysqli_fetch_row($result)) {
               echo('<h3>' . $row[0] . ', ' . $row[1] . '</h3>');
         }

         mysqli_close($conn)
        }
         ?>

    </div>
    <footer>
        <p>Strone opracowal: 0000011111</p>
    </footer>
</div>
</body>
</html>