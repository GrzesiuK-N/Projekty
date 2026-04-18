window.onload = function() {

  document.getElementById('przycisk').onclick = function() {
        szestnastkowa = document.getElementById('liczba').value;
          dlugosc = szestnastkowa.length;
          potega = 1
          wynik = 0

        for (i = dlugosc - 1; i >= 0; i--){

           cyfra = szestnastkowa[i];

           switch(cyfra) {
                 case 'A':
                    wynik = wynik + 10 * potega
                    break;
                    case 'B':
                    wynik = wynik + 11 * potega
                    break;
                    case 'C':
                    wynik = wynik + 12 * potega
                    break;
                    case 'D':
                    wynik = wynik + 13 * potega
                    break;
                    case 'E':
                    wynik = wynik + 14 * potega
                    break;
                    case 'F':
                    wynik = wynik + 15 * potega
                    break;

                default:
                    wynik = wynik + parseInt(cyfra) * potega;
           }   

           potega = potega * 16;

        }

    document.getElementById('wynik').innerHTML = wynik;
    }
}