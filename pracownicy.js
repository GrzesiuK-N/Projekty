window.onload = function() {
    var cy1 = document.getElementById('cy1');
    var cy2 = document.getElementById('cy2');
    var cy3 = document.getElementById('cy3');

    var p1 = document.getElementById('p1');
    var p2 = document.getElementById('p2');
    var p3 = document.getElementById('p3');

    cy1.onclick = function() {
        cy1.style.display = "none";
        p1.style.display = "none";
        cy2.style.display = "contents";
        p2.style.display = "contents";
    }

    cy2.onclick = function() {
        cy2.style.display = "none";
        p2.style.display = "none";
        cy3.style.display = "contents";
        p3.style.display = "contents";
    }

    cy3.onclick = function() {
        cy3.style.display = "none";
        p3.style.display = "none";
        cy1.style.display = "contents";
        p1.style.display = "contents";
    }
}