window.onload = function() {
    document.getElementById('oblicz').onclick = function() {
        var rodzaj = document.getElementById('rodzaj').value;
        var litr = document.getElementById('litr').value;
        var koszt;
        
        if(rodzaj == 1) {
            koszt = 4 * litr;
        } 

        else if(rodzaj == 2) {
            koszt = 3.50 * litr;
        }
        else {
            koszt = 0;
        }

       var p = document.getElementById('wynik');
       p.innerHTML = "koszt paliwa: " + koszt + "zł";

    }
}