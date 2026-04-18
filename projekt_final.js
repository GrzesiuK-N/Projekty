/**
 * PROJEKT FINALNY - KOMPLEKSOWA INTEGRACJA LOGIKI JAVASCRIPT
 * Zawiera: Matematykę, Daty, Regex, Interwały, Zdarzenia Myszy, Obiekty i Tablice.
 */

document.addEventListener("DOMContentLoaded", function() {

    // --- ZADANIE 1: INICJALIZACJA SYSTEMU ---
    const zad1 = document.getElementById("zad1");
    if(zad1) {
        zad1.innerHTML = "System Gotowy. <span style='color: green;'>Hello World & Again!</span>";
    }


    // --- ZADANIE 2: MODUŁ MATEMATYCZNY (Waluty i Trójkąty) ---
    const val1 = document.getElementById("inp_val1"); // PLN lub Podstawa
    const val2 = document.getElementById("inp_val2"); // Kurs lub Wysokość
    const res2 = document.getElementById("zad2");

    // Przeliczanie PLN -> EUR (Zadanie 2a)
    document.getElementById("btn_oblicz_euro").onclick = () => {
        const pln = parseFloat(val1.value);
        const kurs = parseFloat(val2.value);
        if (!isNaN(pln) && !isNaN(kurs) && kurs !== 0) {
            const wynik = (pln / kurs).toFixed(2);
            res2.innerText = `Wynik: ${wynik} €`;
        } else {
            res2.innerText = "Błąd: Podaj poprawne liczby!";
        }
    };

    // Pole Trójkąta (Zadanie 2b)
    document.getElementById("btn_oblicz_trojkat").onclick = () => {
        const a = parseFloat(val1.value);
        const h = parseFloat(val2.value);
        if (a > 0 && h > 0) {
            const pole = (a * h) / 2;
            res2.innerHTML = `Pole trójkąta: <i>${pole}</i>`;
        } else {
            res2.innerText = "Wymiary muszą być dodatnie!";
        }
    };


    // --- ZADANIE 3: ZAAWANSOWANY MONITOR CZASU ---
    const btnCzas = document.getElementById("btn_czas");
    const res3 = document.getElementById("zad3");

    btnCzas.addEventListener("click", () => {
        const teraz = new Date();
        const dniTygodnia = ["niedziela", "poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota"];
        const miesiace = ["styczeń", "luty", "marzec", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "październik", "listopad", "grudzień"];

        let dzienTyg = dniTygodnia[teraz.getDay()];
        let dzienMies = teraz.getDate();
        let miesiacStr = miesiace[teraz.getMonth()];
        
        let hh = teraz.getHours().toString().padStart(2, '0');
        let mm = teraz.getMinutes().toString().padStart(2, '0');

        // Łączymy formaty z obu zadań: Dzień_Tyg Dzień Miesiąc HH:MM
        res3.innerText = `${dzienTyg}, ${dzienMies} ${miesiacStr} ${hh}:${mm}`;
    });


    // --- ZADANIE 4: ANALIZATOR TEKSTOWY (Slicing) ---
    const inputTekst = document.getElementById("tekst_input");
    const res4 = document.getElementById("zad4");

    // Początek (pierwsze 4 znaki - Zadanie 4a)
    document.getElementById("btn_skrot_start").onclick = () => {
        res4.innerText = "Skrót (start): " + inputTekst.value.substring(0, 4);
    };

    // Koniec (ostatnie 5 znaków - Zadanie 4b)
    document.getElementById("btn_skrot_koniec").onclick = () => {
        res4.innerText = "Skrót (koniec): " + inputTekst.value.slice(-5);
    };


    // --- ZADANIE 5 & 6: WALIDACJA REJESTRACJI I REGEX ---
    const form = document.getElementById("rejestracja_final");
    const res56 = document.getElementById("zad5_6");

    document.getElementById("btn_wyslij").onclick = () => {
        const nazwa = document.getElementById("val_nazwa").value;
        const liczba = parseInt(document.getElementById("val_liczba").value);
        const oznaczenie = document.getElementById("val_oznaczenie").value;
        
        // Regex: (2 Wielkie litery + Spacja + 4-5 cyfr) LUB (1-3 Wielkie litery + Spacja + 1-5 cyfr)
        // Integrujemy obie wersje z zadań:
        const wzorzec = /^([A-Z]{1,3})\s(\d{1,5})$/;

        res56.innerHTML = "";
        let error = "";

        if (nazwa.length < 2 || nazwa.length > 50) {
            error = "nieprawidłowa nazwa/nazwisko (2-50 znaki)";
        } else if (isNaN(liczba) || liczba < 1 || liczba > 150) {
            error = "nieprawidłowa liczba/wiek (1-150)";
        } else if (!wzorzec.test(oznaczenie)) {
            error = "błąd oznaczenia/rejestracji!";
        }

        if (error) {
            res56.style.color = "red";
            res56.innerText = error;
        } else {
            res56.style.color = "darkgreen";
            res56.innerText = "Walidacja pomyślna: Dane są poprawne!";
        }
    };


    // --- ZADANIE 7: DYNAMICZNE INTERWAŁY (Poeta Wi-Fi) ---
    const res7 = document.getElementById("zad7");
    const wersy = [
        "Nie mam planu na życie,",
        "ale mam Wi-Fi.",
        "Stoi na stacji lokomotywa,",
        "Ciężka, ogromna i pot z niej spływa,",
        "tłusta oliwa."
    ];
    let indexWersu = 0;

    setInterval(() => {
        res7.innerText = wersy[indexWersu];
        indexWersu = (indexWersu + 1) % wersy.length; // Pętla kołowa (modulo)
    }, 2000);


    // --- ZADANIE 8: LABORATORIUM SMOKÓW (Zdarzenia) ---
    const smok = document.getElementById("grafika_interaktywna");
    const res8 = document.getElementById("zad8");
    let licznikKlikow = 0;

    smok.addEventListener("mouseover", () => {
        res8.innerText = "Najechano myszką na Smoka!";
        res8.style.backgroundColor = "#e1f5fe";
    });

    smok.addEventListener("mouseout", () => {
        res8.innerText = "Myszka opuściła obszar grafiki.";
        res8.style.backgroundColor = "white";
    });

    smok.addEventListener("click", () => {
        licznikKlikow++;
        res8.innerHTML = `Pochodzenie: <b>Xeen</b> | Kliknięć: ${licznikKlikow}`;
    });


    // --- ZADANIE 9: ZARZĄDZANIE TABLICAMI ---
    const btnTablice = document.getElementById("btn_procesuj_tablice");
    const res9 = document.getElementById("zad9");
    const miastaGady = ["Warszawa", "Anakonda", "Gdynia", "Gdańsk", "Smok", "Poznań", "Kameleon"];

    btnTablice.onclick = () => {
        // Sortujemy alfabetycznie i usuwamy 'Kameleon' (bo się schował)
        const przetworzone = miastaGady
            .filter(item => item !== "Kameleon")
            .sort((a, b) => a.localeCompare(b, 'pl'));

        const czyGdansk = miastaGady.includes("Gdańsk") ? "TAK" : "NIE";

        res9.innerHTML = `
            Liczba elementów: ${miastaGady.length}<br>
            Lista: ${przetworzone.join(", ")}<br>
            Czy jest Gdańsk?: <b>${czyGdansk}</b>
        `;
    };


    // --- ZADANIE 10: OBIEKTY (Programowanie hybrydowe) ---
    const animal_person = {
        gatunek: "Orzeł Bielik / Kowalski",
        rola: "Uczeń",
        status: true, // czyUczen lub czyZagrozone
        liczba: 40000, // wiek lub populacja
        
        szczegoly: function() {
            const output = document.getElementById("zad10");
            if (this.status) {
                output.innerText = `Status aktywny (Prawda): ${this.gatunek} (${this.rola})`;
            } else {
                output.innerText = `${this.gatunek}, Wiek/Pop: ${this.liczba}`;
            }
        }
    };

    document.getElementById("btn_pokaz_szczegoly").onclick = () => {
        animal_person.szczegoly();
    };


    // --- ZADANIE 11: SYSTEM QUIZOWY (BONUS) ---
    document.getElementById("btn_tryb_ekstra").onclick = function() {
        document.getElementById("bonus_section").style.display = "block";
    };

    document.getElementById("btn_licz_quiz").onclick = () => {
        const opcje = document.getElementsByName("opcja");
        let suma = 0;
        opcje.forEach(box => {
            if (box.checked) {
                suma += parseInt(box.value);
            }
        });
        document.getElementById("zad11").innerText = `Łączna suma punktów/wartości: ${suma}`;
    };

});