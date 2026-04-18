document.write("<h1>stronach o rogalikach</h1>");
document.write("<h2>serowych</h2>");

//zmienne w java script

var ile = 9;

ile = 14;                //Przypisanie wartości

document.write("ile = " + ile + "<br>");

donuts = 50;

suma_wypiekow = ile + donuts;

document.write("suma wszystkich wypieków" + suma_wypiekow  + "<br>");

// - to też dobrze "ile = 9;""

// stałe w Java script

const Pi = 3.14159265359

// ta linia kodu jest błędna - nie można zmienić wartości stałej "Pi = 3.1"

document.write("Pi = " + Pi + "<br>");


var a = 25
var b = 7
var d = 0.12e10 // notacja eksponecjalna / wykladnicza, czyli 0.12 * (10 do potęg)
var e = 0xA6D // liczba w systemie szestnastkowym


document.write(d + "<br>") // wypisze 12000
document.write(e + "<br>") // wypisze 2600, czyli liczba A6D w syst. dziesiętnym

suma = a + b;
roznica = a - b;
iloczyn = a * b;
iloraz = a / b;
reszta = a % b;

document.write("suma" + suma + "roznica" + roznica + "iloczyn" + iloczyn + "iloraz" + iloraz + "reszta z dzielenia" + reszta + "<br>")



i = 0;

i++; // inkrementacja zwiększenie zmiennej o 1
i++;
i++;
i--; // zmiejszenie wartości zminnej o 1
document.write("i=" + i);

/*

*/

/*
 pętla - powtarzanie operacji
 poniżej są trzy sekcje pętli:
 i = 0 stan poczatkowy  zmiennej i
 i < 10 wykonuj petle dopóki i będzie mniejsze niż 10
 i++ w każdym kroku pętli zmienną i o 1
 */
for(i = 0; i < 10; i++) {
    document.write(i + " rogalik + <br>");

} 
