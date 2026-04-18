window.onload = function() {
    document.getElementById('transformacja1').onclick = function() {
        var kwiatki = document.querySelector('input[name="kwiatki"]:checked').value;
        var obrazek = document.getElementById('Psz');
        console.dir(kwiatki);
        if (kwiatki == "Blur") {
            obrazek.style.filter = "blur(4px)"; 
        }

        else if (kwiatki == "Sepia") {
            obrazek.style.filter = "Sepia(100%)";
        }

        else if (kwiatki == "Negatyw") {
            obrazek.style.filter = "invert(100%)";
        }
    }   

    document.getElementById('transformacjaK').onclick = function () {
        var obrazek = document.getElementById('Pom');
        obrazek.style.filter = "none";
    }

    document.getElementById('transformacjaCZ').onclick = function () {
       var obrazek = document.getElementById('Pom');
       obrazek.style.filter = "grayscale(100%)";
    }

    document.getElementById('transformacja3').onclick = function () {
        var obrazek = document.getElementById('Owc');
        var wartosc = document.getElementById('suwak1').valueAsNumber;
        obrazek.style.filter = `opacity(${wartosc}%)`;
        console.dir(wartosc);
    }

    document.getElementById('transformacja4').onclick = function () {
        var obrazek = document.getElementById('Zol');
        var wartosc = document.getElementById('suwak2').valueAsNumber;
        obrazek.style.filter = `brightness(${wartosc}%)`;
        console.dir(wartosc);
    
    }
}

