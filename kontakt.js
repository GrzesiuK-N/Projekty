window.onload = function() {
    document.getElementById('kontakt').onsubmit = function() {

        if (!document.getElementById('zgoda').checked) {
            document.getElementById('wynik').innerHTML = "Musisz zapoznać się z regulaminem";
            document.getElementById('wynik').style.color = "red";
        } 

        else {
            imie = (document.getElementById('imie').value).toUpperCase();
            nazwisko = (document.getElementById('nazwisko').value).toUpperCase();
            email = document.getElementById('email').value;
            zgloszenie = document.getElementById('zgloszenie').value;
            tekst = imie + " " + nazwisko + "<br>" + "Treść Twojejej sprawy: " + zgloszenie;
            document.getElementById('wynik').innerHTML = tekst;
            document.getElementById('wynik').style.color = "navy";
        }


    return false;
}


}