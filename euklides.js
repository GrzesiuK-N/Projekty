window.onload = function() {

    document.getElementById('oblicz').onclick = function() {
        a = document.getElementById('a').value;
        a = parseInt(a);

        a = document.getElementById('b').value;
        a = parseInt(b);

        // reszta z dzielenia a przez b
        // r = a % b

        a = document.getElementById('a').value;
         b = document.getElementById('b').value;
          r = a % b
          wynik = a % b = b % r;
          document.getElementById('wynik').innerHTML = wynik;
          

    }

}