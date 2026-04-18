window.onload = function() {
      
    document.getElementById('oblicz') .onclick = function( ) {
       masa = document.getElementById('masa').value;
        g = 362.92;
        gotowka = masa * g;
        document.getElementById('gotowka').innerHTML = gotowka + ' zl';

    }

 }