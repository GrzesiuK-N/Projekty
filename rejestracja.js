window.onload = function() {
    var blok1 = document.getElementById('blok1');
    var blok2 = document.getElementById('blok2');
    var blok3 = document.getElementById('blok3');
    
    document.getElementById('Klient').onclick = function() {
        blok1.style.display = "block";
        blok2.style.display = "none";
        blok3.style.display = "none";
    }


    document.getElementById('Adres').onclick = function() {
        blok1.style.display = "none";
        blok2.style.display = "block";
        blok3.style.display = "none";
    }


    document.getElementById('Kontakt').onclick = function() {
        blok1.style.display = "none";
        blok2.style.display = "none";
        blok3.style.display = "block";
    }

    
}

var licznik = 4;
function pasek(){
    licznik += 12;
    alert(licznik);
}