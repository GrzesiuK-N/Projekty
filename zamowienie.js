window.onload = function() {
    var formularz = document.forms['zamowienie'];
    formularz.przycisk.onclick = function() {
       var licz_kopii = formularz.kopie.valueAsNumber;
       var papier = document.querySelector('input[name="papier"]:checked').id;
       var obraz = formularz.obraz.files[0].name;
       console.dir(obraz);
       if (papier == "papier_blyszczacy") {
            cena = 1.5 * licz_kopii;
       }
       else {
            cena = 2 * licz_kopii;
       }
       var koszyk = document.getElementById("koszyk");
       var obraz1 = document.createElement("img");
       obraz1.src = URL.createObjectURL(obraz);
       koszyk.appendChild(obraz1);
    
    }
}