window.onload = function() {

  document.getElementById('przycisk').onclick = function() {
        binarna = document.getElementById('liczba').value;
          dlugosc = binarna.length;

          potega = 1
          wynik = 0

        // poniższa pętla jest czytana następująco:
        // powtarzaj:
        // dla i rózwnego (dlugosc liczby binarnej -1);
        // wykonuj pętle dopóki i >= 0;
        // w każdym kroku pętli zmiejsz i o 1

        for (i = dlugosc - 1; i >= 0; i--){

            if (binarna[i] == '1')
                wynik = wynik + potega;

            potega = potega * 2;

        }

    document.getElementById('wynik').innerHTML = wynik;
    }
}