window.onload = function() {
    document.getElementById('przycisk').onclick = function() {
        var wynik = document.getElementById("wynik").innerHTML;

        var lista = document.getElementById("ceny").value;
        var opcja1 = document.getElementsByClassName("").value;
        var opcja1 = document.getElementsByClassName("").value;
        var opcja1 = document.getElementsByClassName("").value;
        var opcja1 = document.getElementsByClassName("").value;
        var opcja1 = document.getElementsByClassName("").value;
        console.dir(lista);

        var N = document.getElementById("pole").valueAsNumber;
            console.dir(N);
        var L = document.getElementById("dostawa").checked;
            console.dir(L);

            if (L == true > 55) {
                wynik + 15;
            }

            wynik = N * lista;


            
    }
}