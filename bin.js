window.onload = function() {

    document.getElementById('przycisk').onclick = function() {
         liczba = document.getElementById('liczba').value;
         liczba = parseInt(liczba);
         wynik = "";
         while(liczba > 0) {
            reszta = liczba % 2;
            wynik = reszta + wynik;
            liczba = Math.floor(liczba /  2);
         }
         document.getElementById('wynik').innerHTML = wynik;
    }
}