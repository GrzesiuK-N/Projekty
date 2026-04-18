window.onload = function(){

    document.getElementById('cisnienie').onchange = function() {
        cisnienie = document.getElementById('cisnienie').value;
      document.getElementById('wartosc').innerHTML = cisnienie;

    }
    


    document.getElementById('przycisk').onclick = function() {
    {
    chmura = document.getElementById('chmura').value;
    chmura = document.getElementById('wybor').value;
    chmura = document.getElementById('cisnienie').value;
    chmura = document.getElementById('wartosc').value;
    chmura = document.getElementById('przycisk').value;
    chmura = document.getElementById('prognoza').value;
         
    if (chmura > -20 && silny wiatr > -20) { document.getElementById('chmura', 'silny wiatr').innerHTML = "śnieżyca";
    }

    if (chmura < 20 && slaby wiatr, brak wiatru < 20) { document.getElementById('chmura').innerHTML = "idz na spacer z taboretem"
    }

    }



     }

}