numer = 0;
lista = ['ryba11', 'ryba22', 'ryba33', 'ryba44', 'ryba55',];

function ziemniaki () {
    numer++;
    if (numer >= lista.lenght )
        numer = 0
    document.getElementById('akwarium').src = lista[numer];
    console.log (numer);
    console.log (lista[numer]);
}

window.onload = function () {

    setInterval(ziemniaki, 5000);

    document.getElementById('akwarium').onclick = ziemniaki

}