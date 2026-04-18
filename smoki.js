window.onload = function() {
    var blok1 = document.getElementById('baza');
    var blok2 = document.getElementById('opisy');
    var blok3 = document.getElementById('galeria');
    var sect1 = document.getElementById('sect1');
    var sect2 = document.getElementById('sect2');
    var sect3 = document.getElementById('sect3');
    
    blok1.onclick = function() {
        blok1.style.backgroundColor = "mistyrose";
        blok2.style.backgroundColor = "#FFAEA5";
        blok3.style.backgroundColor = "#FFAEA5";
        sect1.style.display = "block";
        sect2.style.display = "none";
        sect3.style.display = "none";
    }

    blok2.onclick = function() {
        blok2.style.backgroundColor = "mistyrose";
        blok3.style.backgroundColor = "#FFAEA5";
        blok1.style.backgroundColor = "#FFAEA5";
        sect2.style.display = "block";
        sect3.style.display = "none";
        sect1.style.display = "none";
    }

    blok3.onclick = function() {
        blok3.style.backgroundColor = "mistyrose";
        blok1.style.backgroundColor = "#FFAEA5";
        blok2.style.backgroundColor = "#FFAEA5";
        sect3.style.display = "block";
        sect1.style.display = "none";
        sect2.style.display = "none";
    }
}