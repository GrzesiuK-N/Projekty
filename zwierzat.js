window.onload = function() {
    zdjecie = "waz.png";
    document.getElementById('przycisk').onclick = function() {
        document.getElementById('obrazek').src = "jelen.png";
        window.setInterval(function() {
           if
            (zdjecie == "jelen.png")
             zdjecie = "waz.png";
            else
               zdjecie = "jelen.png"
                document.getElementById('obrazek').src = zdjecie
        }, 1000);
        
    }
}