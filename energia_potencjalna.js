   window.onload = function() {
      
      document.getElementById('oblicz') .onclick = function( ) {
         masa = document.getElementById('masa').value;
         wysokosc = document.getElementById('wysokosc').value;
          g = 9.81665;
          energia = masa * wysokosc * g;
          document.getElementById('energia').innerHTML = energia + ' J';

      }

   }