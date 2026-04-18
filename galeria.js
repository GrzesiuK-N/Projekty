window.onload = function() {
    var obraz = document.getElementById('specjalny');
    document.getElementById('mniejszy').onclick = function() {
        var numer = parseInt(obraz.name);
        if (numer == 7) {
            numer = 0;
        }
        obraz.src = `${numer+1}.jpg`;
        obraz.name = numer + 1;
        console.dir(obraz.src);
    }

    document.getElementById('wiekszy').onclick = function() {
        var numer = parseInt(obraz.name);
        if (numer == 1) {
            numer = 8;
        }
        obraz.src = `${numer-1}.jpg`;
        obraz.name = numer - 1;
        console.dir(obraz.src);
    }
}