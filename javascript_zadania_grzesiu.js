document.addEventListener("DOMContentLoaded", function() {

    // zad 1
    const zad1 = document.getElementById("zad1");
    if(zad1) {
        zad1.innerHTML = "Hello Again!";
    }


    // zad 2
    const zmiennaOk = document.getElementById("oblicz");
    zmiennaOk.addEventListener("click", function() {
        let cena = parseFloat(document.getElementById("zl").value);
        let kurs = parseFloat(document.getElementById("kurs").value);
        let Zad2 = document.getElementById("zad2");

        if (!isNaN(cena) && !isNaN(kurs)) {
            let cenaeuro = (cena * kurs) / Number(5);
            Zad2.innerText = (cenaeuro) + "€";
        } else {
            Zad2.innerText = "Podaj inną kombinację arbuzów";
        }
    });


    // zad 3
    const zmiennaCzas = document.getElementById("czas");
    zmiennaCzas.addEventListener("click", function() {
        const Zad3 = document.getElementById("zad3");
        const teraz = new Date();

        const przedzialRoku = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];
        let miesiac = przedzialRoku[teraz.getMonth()];
        const dniTygodnia = [0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29,30];
        let dzien = dniTygodnia[teraz.getUTCDay()];
        
        let godzina = teraz.getHours();
        let minuta = teraz.getMinutes();
        
        // 0 == minuty
        if (minuta < 10) {
            minuta = "0" + minuta;
        }

        Zad3.innerText = dzien + " " + miesiac + " " + godzina + ":" + minuta;
    });


    // zad 4
    const btnSkrot = document.getElementById("skrot");
    btnSkrot.addEventListener("click", function() {
        let tekst = document.getElementById("pesel").value;
        let skroconyTekst = tekst.substring(0,5,0);
        document.getElementById("zad4").innerText = skroconyTekst;
    });


    // zad 5
    const formularz = document.getElementById("rejestracja");
    formularz.addEventListener("submit", function(event) {
        let nazwisko = document.getElementById("nazwisko").value;
        let wiek = parseInt(document.getElementById("wiek").value);
        let divZad5 = document.getElementById("zad5");
        
        divZad5.innerText = ""; 
        let valid = true;

        if (nazwisko.length < 2 || nazwisko.length > 50) {
            divZad5.innerText = "nieprawidłowe nazwisko";
            valid = false;
        } 
        else if (isNaN(wiek) || wiek <= 17 || wiek >= 151) {
            divZad5.innerText = "nieprawidłowa liczba wieku";
            valid = false;
        }

        if (!valid) {
            event.preventDefault(); 
        }
    });


    // zad 6
    const btnSprawdzPociag = document.getElementById("sprawdz");
    btnSprawdzPociag.addEventListener("click", function() {
        let oznaczenie = document.getElementById("oznaczenie").value;
        let divZad6 = document.getElementById("zad6");

        let wzorzec = /^[A-Z]{2} \d{4,5}$/;

        if (wzorzec.test(oznaczenie)) {
            divZad6.innerText = "poprawne oznaczenie";
        } else {
            divZad6.innerText = "błąd oznaczenia";
        }
    });


    // zad 7
    const divZad7 = document.getElementById("zad7");
    let stanTekstu = 0;

    divZad7.innerText = "Ciężka, ogromna i pot z niej spływa";

    setInterval(function() {
        stanTekstu++;
        if (stanTekstu !== 0) {
            divZad7.innerText = "Stoi na stacji lokomotywa";
        } else {
           divZad7.innerText = "Ciężka, ogromna i pot z niej spływa" || "tłusta oliwa";
        }


    }, 1500);


    // zad 8
    const imgSmok = document.getElementById("grafika");
    const divZad8 = document.getElementById("zad8");

    imgSmok.addEventListener("mouseover", function() {
        divZad8.innerText = "Wodny Smok";
    });

    imgSmok.addEventListener("mouseout", function() {
        divZad8.innerText = "";
    });

    imgSmok.addEventListener("click", function() {
        divZad8.innerText = "pochodzenie: Xeen";
    });

    /*

    // zad 9
    const btnGady = document.getElementById("gady");
    btnGady.addEventListener("click", function() {
        let miasta = ["warszwa", "gdynia", "sopot", "gdańsk", "poznań", "kraków", "wrocław", "radom"];
        let divZad9 = document.getElementById("zad9");

        let liczbaWszystkich = miasta.length;

    if (this.miasta === true) {
                Zad9.innerText = "zagrożone zwierzę - " + this.gatunek;
            } else {
                Zad9.innerText = this.liczbaWszystkich + ", " + ;
            }

        divZad9.innerHTML = "Liczba wszystkich gadów: " + liczbaWszystkich; 
    });


    */

    // zad 10
    let osoba = {
        imie: "Jan",
        nazwisko: "Kowalski",
        uczen: true,
        wiek: 16,
        szczegoly: function() {
            const divZad10 = document.getElementById("zad10");
            if (this.uczen === false) {
                divZad10.innerText = this.imie + " " + this.nazwisko + " " + "lat: " + this.wiek + " ";
            } else {
                divZad10.innerText = "uczeń: " + this.imie + " " + this.nazwisko;
            }
        }
    };

    const btnUruchom = document.getElementById("uruchom");
    btnUruchom.addEventListener("click", function() {
        osoba.szczegoly();
    });


// zad11
    const wybrane = document.getElementsByName("pytanie");
    const Zad11 = document.getElementById("zad11");

});


