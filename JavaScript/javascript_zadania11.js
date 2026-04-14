window.onload = function() {
           // zad 1
     document.getElementById('zad1').text = "Hewllo World!";
     

 // zad 2

         document.getElementById('oblicz').onclick = function() {
            no = document.getElementById('zad2').innerHTML;

          podstawa = document.getElementById('podstawa').value 

           wysokosc = document.getElementById('wysokosc').value 

           document.getElementById('zad2').innerHTML = podstawa * wysokosc / 2


        }
          
    

// zad 3

document.getElementById('czas').onclick = function() {



    juz = new Date

                dzien = juz.getDay();
                godzina = juz.getHours();
                minuty = juz.getMinutes();

                if (dzien < 10) dzien = dzien; 
                if (godzina < 10) godzina = "0" + godzina;  
                if (minuty < 10) minuty = "0" + minuty; 

                if(dzien == 0) dzien = "Niedziela";
                if(dzien == 1) dzien = "Poniedzialek";
                if(dzien == 2) dzien = "Wtorek";
                if(dzien == 3) dzien = "Środa";
                if(dzien == 4) dzien = "Czwartek";
                if(dzien == 5) dzien = "Piątek";
                if(dzien == 6) dzien = "Sobota";
               /*
                dzien = ["Niedziela" = 0, "Poniedzialek" = 1, "Wtorek" = 2, "Środa" = 3, "Czwartek" = 4, "Piątek" = 5, "Sobota" = 6];

                dzien.sort(); 
                */

    juz = document.getElementById('zad3').innerHTML = dzien + " " + godzina + ":" + minuty;



}

// zad 4

        document.getElementById('skrot').onclick =  function() {

                okk = document.getElementById('slowo').value;
            pierwsze6 = okk.substr(0, 4);


            drugi = okk.substr(0,2);
           
            domek = okk.substr(0,4);

            document.getElementById('zad4').innerHTML = domek;


        }

}