<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinguin</title>
</head>
<body>
    <?php
 // Początek kodu php
       // polecenie echo - wypisuje cokolwiek na ekranie tym czymś często jest kod html
     // każe polecenie w języku php kończy się średnikiem 
       echo ('<h1> Czesc Pingwinku! </h1>');

// zienne - w PHP każda zmienna musi być pobrzedzona znakiem $

$konto = 28000;

// od stanu konta odejmujemy 300 zł

$konto = $konto - 3000;

// kontenacja złączenie napisów. W PHP operator to kropka (.)

echo('na koncie pozostalo 0:' . $konto . 'zł.<h2>');

// instrukcje warunkowe 
// sprawdzimy czy można kupić nowy telefon za 6000zł

if ($konto >=6000) {
    echo('<h2> możesz dostać nowy telefon za darmo </h2>');
}
else{
    echo('<h2> nie możesz dostać za darmo telefonu </h2>');
}

// pętla for wykonuje się określoną ilość razy 
for ($i = 0; $i <= 999000; $i++){
   echo ($i . '<br>');
}

//petla while - wykonuje się dopuki warunek jest spełniony
// przykład - będziemy wypłacać z konta 2000zł dopuki wystarczy pieniędzy

while ($konto >= 2000) {
    $konto = $konto - 2000;
    echo ('wypłaciłem 2000zł, na koncie pozostało: ' . $konto . 'zł. <br>');
}





// Koniec kodu php
    ?>
</body>
</html>