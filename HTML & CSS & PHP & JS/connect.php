<?php
error_reporting(32767);
ini_set('display_errors','true');
$conn = mysqli_connect(
    "127.0.0.1",
    "38710318_joachim",
    "M3m3nt0M0r!",
    "38710318_joachim",3380
);
if ($conn === false) {
    die("baza danych cie nie lubi :(");
}
else {
    mysqli_set_charset($conn,'utf8');
}
?>
