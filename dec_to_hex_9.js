window.onload = function() {

    document.getElementById('przycisk').onclick = function() {
         liczba = document.getElementById('liczba').value;
         liczba = parseInt(liczba);
         wynik = "";
         while(liczba > 0) {
            reszta = liczba % 16;
            
            switch (reszta) {

                 case 10:
                    wynik = 'A' + wynik
                    break;
                    case 11:
                    wynik = 'B' + wynik
                    break;
                    case 12:
                    wynik = 'C' + wynik
                    break;
                    case 13:
                    wynik = 'D' + wynik
                    break;
                    case 14:
                    wynik = 'E' + wynik
                    break;
                    case 15:
                    wynik = 'F' + wynik
                    break;

                default:
                    wynik = reszta + wynik;

            
        }
            liczba = Math.floor(liczba /  16);
         }
         document.getElementById('wynik').innerHTML = wynik;
    }
}