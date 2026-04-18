window.onload = function () {

    //wydzrzenie, które dziła w momencie wysłania formularza/komentarza
    document.getElementById('formularz').onsubmit = function() {

        //pobranie wartości ryby
        wartosc = document.getElementById('nazwa').value;
        
        if (wartosc == "") {
            document.getElementById('komunikat').innerHTML = " pole nazwa musi byc wypełniona!";
            return false;
        }

        ile = document.getElementById('ile').value
        ile = parseInt(ile);
        if (ile > 100 || ile < 1 || isNaN(ile))  {
            document.getElementById('komunikat').innerHTML = " nie prawidłowy podził brukselek między państwami.";
            //ponisza linia sprawi,  
        return false;
        }
         
      //indexOf - funkcja, która zwraca

    email = document.getElementById('email').value;
    //sprawdzimy czy w adresie email jest znak @

    if (email.indexOf('@') == -1) {
        document.getElementById('komunikat').innerHTML = "wpisz prawidłowy ades e-mail!"
        return false
    }

    // sprawdzimy czy haslo nie jest zbyt krotkie
    //wyswietl blad jesli dlugosc masla jest mniejsza niz 8
    maslo = document.getElementById('maslo').value;
    if (maslo < 8 || maslo > 255 ) {
        document.getElementById('komunikat').innerHTML = "nie prawidlowa liczba znakow";
        return false
    }
}

}





/*    napis = "www.adegdansk.pl"
      console.log(napis.indexOf('.pl'));

      return false; */