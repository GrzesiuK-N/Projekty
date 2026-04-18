window.onload = function() {
    document.getElementById('losuj').onclick = function() {

        //Math.random() - liczba pseudolosowa z zakresu <0,1>
        // liczba pseudolosowa z zakresu <0,1>
           var los = Math.floor(Math.random()*11)+1;

           document.getElementById('wynik').innerHTML = los;
    }

    document.getElementById('sprawdz').onclick = function() {
        login = document.getElementById('login').value;
        haslo = document.getElementById('haslo').value;

        document.getElementById('wynik2').innerHTML += "wpisano login 1 hasło:" + 'login' + 'haslo'; 
        wiek = document.getElementById('wynik').value;
        wiek = parseInt(wiek);

        if (wiek >= 18 && wiek < 150) {
           document.getElementById('wynik2').innerHTML += "Ok";
     } else {
          document.getElementById('wynik2').innerHTML += "błedny wiek";
          }

          pola_radio = document.getElementsByName('gra');

         for(i = 0; i < pola_radio.length; i++){
            if (pola_radio[i].checked)
                gra = pola_radio[i].value;
         } 


         // alternatywny kod:
         if (pola_radio[0].checked)
         gra = pola_radio[0].value;

         document.getElementById('wynik2').innerHTML += "<br> wybrana gra:" + gra;
        }

        // sprawdz czy wiek jest powyzej 18 i ponizej 150 lat
        // jeśli tak - do komunikatu z pola wynik2 Dopisz "OK"
        // jeśli nie - do komunikatu z pola wynik2 Dopisz "błędny wiek"
    

}