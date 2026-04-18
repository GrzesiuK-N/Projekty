window.onload = function() {
    var div = document.getElementById("wynik");

    for (var i = 1; i <= 10; i++) {
        var wynik = i * 3;
        div.innerHTML += i + " * 3 = " + wynik + "<br>";
    }
};
