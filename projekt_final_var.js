/* 
   WERSJA KLASYCZNA (Z WYKORZYSTANIEM VAR)
   Zwróć uwagę na to, że var jest dostępny w całym zasięgu funkcji, a nie bloku.
*/

document.addEventListener("DOMContentLoaded", function() {

    // --- ZADANIE 1 ---
    var zad1 = document.getElementById("zad1");
    if(zad1) {
        zad1.innerHTML = "System Gotowy. Wykorzystuję <b>var</b> zamiast const.";
    }


    // --- ZADANIE 2 ---
    var val1 = document.getElementById("inp_val1");
    var val2 = document.getElementById("inp_val2");
    var res2 = document.getElementById("zad2");

    document.getElementById("btn_oblicz_euro").onclick = function() {
        var pln = parseFloat(val1.value);
        var kurs = parseFloat(val2.value);
        if (!isNaN(pln) && !isNaN(kurs)) {
            var wynik = (pln / kurs).toFixed(2);
            res2.innerText = "Wynik: " + wynik + " €";
        }
    };


    // --- ZADANIE 3 ---
    document.getElementById("btn_czas").onclick = function() {
        var teraz = new Date();
        var dni = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
        // Tutaj var jest bezpieczny, ale tablica mogłaby zostać przez przypadek nadpisana
        res3.innerText = dni[teraz.getDay()] + " " + teraz.getHours() + ":" + teraz.getMinutes();
    };


    // --- ZADANIE 7: DYNAMICZNE INTERWAŁY ---
    var res7 = document.getElementById("zad7");
    var wersy = ["Wiersz 1", "Wiersz 2", "Wiersz 3"];
    var index = 0; // Globalna zmienna var dla tego pliku

    setInterval(function() {
        res7.innerText = wersy[index];
        index = (index + 1) % wersy.length;
    }, 2000);


    // --- ZADANIE 9: TABLICE ---
    document.getElementById("btn_procesuj_tablice").onclick = function() {
        var gady = ["Anakonda", "Gekon", "Kameleon"];
        // Używamy var wewnątrz pętli lub filtrów (niezalecane w dużych projektach)
        var filtr = gady.filter(function(g) { return g !== "Kameleon"; });
        document.getElementById("zad9").innerText = filtr.sort().join(", ");
    };

    // --- ZADANIE 10: OBIEKTY ---
    // Użycie var dla obiektów jest ryzykowne, bo var osoba = "napis" mogłoby skasować cały obiekt
    var osoba = {
        imie: "Jan",
        nazwisko: "Kowalski",
        szczegoly: function() {
            var div = document.getElementById("zad10");
            div.innerText = this.imie + " " + this.nazwisko;
        }
    };

    document.getElementById("btn_pokaz_szczegoly").onclick = function() {
        osoba.szczegoly();
    };

});