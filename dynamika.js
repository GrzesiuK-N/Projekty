// ten kod poczatkowy sprawia, ze skrypt JS zacznie dzialac po zaladowaniu sie 
// kodu HTML strony
window.onload = function() {

    //kod, ktory zacznie dzialac po nacisnieciu przycisku z id "oblicz"
    document.getElementById('oblicz').onclick = function() {
        masa = document.getElementById('m').value;
        przyspieszenie = document.getElementById('a').value;
        sila = masa * przyspieszenie;
        document.getElementById('F').innerHTML = sila + "N";
    }

    document.getElementById('Droga').onclick = function () {
        czas = document.getElementById('t').value;
        przyspieszenie = document.getElementById('a').value;
        Droga = czas * czas * przyspieszenie;
        document.getElementById('S').innerHTML = Droga + "G";
        

    }

}