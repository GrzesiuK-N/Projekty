let szerokoscPaska = 4;

function aktywujZakladke(zakladkaId) {
    document.getElementById('blok1').style.display = 'none';
    document.getElementById('blok2').style.display = 'none';
    document.getElementById('blok3').style.display = 'none';
  
    document.getElementById(zakladkaId).style.display = 'block';
}

function zaktualizujPostep() {
    let pasek = document.querySelector('#postep div');
    
    if (szerokoscPaska < 100) {
        szerokoscPaska += 12; 
        if (szerokoscPaska > 100) {
            szerokoscPaska = 100;
        }
        pasek.style.width = szerokoscPaska + '%';
    }
}

function zatwierdz() {
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let data = document.getElementById('data').value;
    
    let ulica = document.getElementById('ulica').value;
    let numer = document.getElementById('numer').value;
    let miasto = document.getElementById('miasto').value;
    
    let telefon = document.getElementById('telefon').value;
    
    let rodo = document.getElementById('rodo').checked ? 'On' : 'Off';
    
    console.log(imie + ", " + nazwisko + ", " + data + ", " + ulica + ", " + numer + ", " + miasto + ", " + telefon + ", " + rodo);
}