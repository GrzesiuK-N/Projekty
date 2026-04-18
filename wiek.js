window.onload = function(){

    document.getElementById('sprawdz').onclick = function() {


    wiek = document.getElementById('wiek').value; 

    if (wiek >= 21) {
        document.getElementById('wynik').innerHTML = wiek + "mozesz pic alkochol w usa"
    }

    if (wiek == 0) {
        document.getElementById('wynik').innerHTML = wiek + "noworodek"
    }

    if (wiek = 18) {
        alert('wszystkiego najlepszego')
    }

     if (wiek < 0) {
        alert('nieprawidlowy wiek!');
     }

    //instrukcja warunkowa - if () - nawiasy sa wazne!
 else if (wiek < 18) {
        document.getElementById('wynik').innerHTML = wiek + " lat: niepelnoletnia";
    }
 else {
    document.getElementById('wynik').innerHTML = wiek + " lat: mozesz glosowac";
 }
    
        const a = parseFloat(document.getElementById('a').value);
        const b = parseFloat(document.getElementById('b').value);

  console.log (a + b);

  suma = a * b;

   document.getElementById('oblicz') .onclick = function( ) {
    masa = document.getElementById('masa').value;
    wysokosc = document.getElementById('wysokosc').value;
     g = 9.81665;
     energia = masa * wysokosc * g;

 
          }
       
      }

}

// if (wiek > 100) {
  //     document.getElementById('wynik').innerHTML += "zyczymy 200lat!";
 //   }
//     document.getElementById('wynik').innerHTML += "<br> Koniec programu";


