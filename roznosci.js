window.onload = function() {

        document.getElementById('przycisk').onclick = function() {
            pesel = document.getElementById('pesel').value;

            // substr() - substring - podciag (a - poczatkowy znak - b - dlugosc na )                                                                                                                                                                                                                                                                                                                 //90834206767                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         //09210507040
            pierwsze6 = pesel.substr(0, 6);

           // document.getElementById('wynik').innrHTML = pierwsz6;

            rok = pesel.substr(0,2);
            miesiac = pesel.substr(2,2);
            if (miesiac > 20)
                miesiac -= 20;
            dzien = pesel.substr(4,2);
           
            //wypisanie daty w fromacie DD.MM.RR

            document.getElementById('wynik').innerHTML = dzien + "." + miesiac + "." + rok;

                
        
        }

        ceny = [10.95, 30, 5.99, 23.5, 21.5, 9.99, 0.99];

                ceny.sort();

                //petla dla wszystkich cen
                for (i = 0; i < ceny.lenght; i++) {
                    console.log(ceny[i]);
                }

                //funkcja dla sort działa źle ale dla napisów posortuje dobrze

                marki = ["adidas", "nike", "new balance", "Hp", "Crop", "H&M", "Lenovo"];
                marki.sort();
                for (i = 0; i < marki.lenght; i++) {
                    console.log(marki[i]);
                }

    //łączenie elementów tablicy -

    marki_zlaczone = marki.join('-=.;,-=-.;,=');
    console.log(marki_zlaczone);

    // reverse() - odwracanie tablicy

    marki.reverse();
    console.log(marki.join(", "));


    function porownaj(a,b) {
        return a - b;
    }

    ceny.sort(porownaj);
    console.log(ceny.join(", "));

    //pobrana wysokosc i szerokosc okna(te liczby to wlasciwosci obiektu window)
    wysokosc = window.innerHeight;
    szerokosc = window.innerWidth;

    console.log("wysokosc okna" + wysokosc)
    console.log("szerokosc okna" + szerokosc)

    //przypomnienie - setTimeout i  set Interval - wykonuja instrukcje co pewien czas

    //ta funkcja wypisze "hello world" po 3 sekundach
    window.setTimeout(function(){console.log("Limonki!")}, 3000);
    
    // ta funkcja wypisze "goodbye world" CO 2 sekundy
    window.setInterval(function(){console.log("Arbuz witaminowo kwasowy?")}, 1);

    /*
    function goodbye(){console.log("goodbye world!")}
    window.setInterval(goodbye, 2000);
    */


    // napisz funkcję o nazwie "wymiary okna()", która w polu id "wynik" qypisuje aktualne wymiary okna

    //wywoluj funkcje co pol sekundy
    //uwaga - aby wywolac gotową funkcję wewnątrz setTimeout lub setInterval Nie Należy po nazwie funkcji wstawiać nawiasów.

      function idz_do_sklepu() {

           // window.location - zmienia adres strony
           window.location.href = "https://www.wemod.com"

      }

 //     window.setTimeout(idz_do_sklepu, 10000)

      sekundy = 10;

      function aktualizuj_sekundy() {
        sekundy -= 1;
        document.getElementById('sekundy').innerHTML = sekundy;
      }

      window.setInterval(aktualizuj_sekundy, 1000);

      //jeżeli kliknięto
      document.getElementById('ciastko').ondblclick = function() {
            document.getElementById('wydarzenie').innerHTML = "podwójne kliknięcie"
      }

      //jeżeli najechano myszką
      document.getElementById('ciastko').onmouseout = function() {
      document.getElementById('wydarzenie').innerHTML = "najechano myszką"
      }

      //jeżeli wciśnięto klawisz myszy (ale jeszcze nie puszczono)
      document.getElementById('ciastko').onmousedown = function() {
      document.getElementById('wydarzenie').innerHTML = "kliknięto (ale nie puszczono)"
      }

      //jeżeli wciśnięto klawisz myszy (ale jeszcze nie puszczono)
      document.getElementById('ciastko').onmousemove = function() {
      document.getElementById('wydarzenie').innerHTML = "poruszono myszką"
      }

      // uwaga - teraz nie będzie widoczne wydarzenie najechania myszką

      // prawy przycisk myszy (czyli menu kontekstowe)
      document.getElementById('ciastko').oncontextmenu = function() {
            document.getElementById('wydarzenie').innerHTML = "menu kontekstowe"
      }

      //jeżeli zaczniemy edytować pole edycyjne
      document.getElementById('ulubione').onfocus = function() {
        document.getElementById('wydarzenie').innerHTML = "zaczęto edytycję"
      }

      //jeśli przestaniemy edytować pole edycyjne (np. klikniemy obok)
      document.getElementById('ulubione').onblur = function() {
        document.getElementById('wydarzenie').innerHTML = "skończono edycję"
      }

      //jeśli wartość pola się zmieni
      document.getElementById('ulubione').onchange = function() {
        document.getElementById('wydarzenie').innerHTML = "nowa wartość:" +
        document.getElementById('ulubione').value;
      }

      //wciśnięcie klawisza na klawiaturze (ale nie puszczenie)
      document.getElementById('ulubione').onkeydown = function() {
        document.getElementById('wydarzenie').innerHTML = "wciśnięto klawisz"
      }

      //puszczenie wciśniętego klawisza na klawiaturze
      document.getElementById('ulubione').onkeyup = function() {
        document.getElementById('wydarzenie').innerHTML = "puszczenie"
      }

}

window.onunload = function() {
    this.alert("nie zamykaj mnie!");
}

/*    document.getElementById('wynik').innerHTML = rok;
            document.getElementById('wynik1').innerHTML = miesiac;
            document.getElementById('wynik2').innerHTML = dzien;
          */



            // Do testu 02210512345
            // console.log = pierwsze6;