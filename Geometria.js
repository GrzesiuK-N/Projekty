window.onload = function() {

    document.getElementById('Pole').onclick = function() {
        Bok1 = document.getElementById('A').value;
        Wysokosc = document.getElementById('H').value;
        Po1 = Bok1 * Wysokosc /2;
        document.getElementById('Po1').innerHTML = Bok1 + "cm";
    }

    document.getElementById('Obwod').onclick = function () {
        Bok1 = document.getElementById('A').value;
        Bok2 = document.getElementById('B').value;
        Bok3 = document.getElementById('C').value;
        Bok1 = parseFloat
        Obwod = Bok1 + Bok2 + Bok3;
        document.getElementById('Ob1').innerHTML = Obwod + "CM";

    }

    document.getElementById('prostokatPO').onclick = function () {
        Bok1 = document.getElementById('A').value;
        Bok2 = document.getElementById('B').value;
        prostokatPO = Bok1 * Bok2;
        document.getElementById('P2').innerHTML = prostokatPO + "cm^2";

    }

    document.getElementById('prostokatOB').onclick = function () {
        Bok1 = document.getElementById('A').value;
        Bok2 = document.getElementById('B').value;
        prostokatOB = Bok1 + Bok2 + Bok1 + Bok2;
        document.getElementById('Ob2').innerHTML = prostokatOB + "Cm";

    }

    document.getElementById('koloPO').onclick = function () {
        PI = Math.PI
        Wysokosc = document.getElementById('H').value;
        koloPO = Math.PI;
        document.getElementById('P3').innerHTML = koloPO + "mi1";

    }

    document.getElementById('koloOB').onclick = function () {
        PI = document.getElementById('PI').value;
        L = document.getElementById('L').value;
        koloOB = 2 + Math.PI;
        document.getElementById('Ob3').innerHTML = koloOB + "mi2";

    }

    document.getElementById('trapezPO').onclick = function () {
        PI = document.getElementById('PI').value;
        L = document.getElementById('L').value;
        trapezPO = Bok1 + Math.PI;
        document.getElementById('Ob3').innerHTML = trapezPO + "mi2";

    }

    document.getElementById('trapezOB').onclick = function () {
        PI = document.getElementById('PI').value;
        L = document.getElementById('L').value;
        trapezOB = 2 + Math.PI;
        document.getElementById('Ob3').innerHTML = trapezOB + "mi2";

    }


}