window.onload = function() {
    var button = document.getElementById('oblicz');
    button.onclick = function () {
        var kura_s = document.getElementById('kura_s').checked;
        var kurs = document.getElementById('kurs').checked;
        var cena = 0;
        if (kura_s){
            cena += 5000;
        }

        if (kurs) {
            cena += 3000;
        }

        var rat = document.getElementById('rat').valueAsNumber;
        var koszt_one_rat = cena / rat;
        console.dir(koszt_one_rat);
        var wyswietl_txt = document.getElementById('wyswietl_txt');
        var miasto = document.getElementById('miasto').value;
        console.dir(miasto);
        wyswietl_txt.innerHTML = `Kurs odbędzie się w ${miasto}. Koszt
        całkowity: ${cena} zł. Płacisz ${rat} rat po ${koszt_one_rat} zł`; 
        
    }
}
    