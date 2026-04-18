window.onload = function(){

    document.getElementById('sprawdz').onclick = function() {


        Temperatura = document.getElementById('Temperatura').value; 

    if (Temperatura > 100) {
        document.getElementById('wynik').innerHTML ="para wodna";
    }

    if (Temperatura == 0) {
        document.getElementById('wynik').innerHTML ="temperatura zamarzania";
    }

     if (Temperatura < 0) {
        document.getElementById('wynik').innerHTML ="lod";
     }

     if (Temperatura > 0 && Temperatura <= 100) document.getElementById('wynik').innerHTML ="ciecz";

 else if (Temperatura < 1) {
        document.getElementById('wynik').innerHTML =" nie jest zimno- no";
    }
 else {
    document.getElementById('wynik').innerHTML = " jest zimno- yes";

          }
       
     }

 }

