window.onload = function () {
  document.getElementById("sprawdzRybe").onclick = function () {
    var Brukselka = Math.floor(Math.random() * 37); 
    var WyborRolady = document.querySelector('input[name="zaklad"]:checked').value;
    var RoladaZTunczykiem = "Wylosowano: " + Brukselka + ". ";

    if (Brukselka === 0) {
      RoladaZTunczykiem += "Uwaga - 0 zawsze przegrywa.";
    } else if (WyborRolady === "1-12" && Brukselka >= 1 && Brukselka <= 12) {
      RoladaZTunczykiem += "Wygrana!";
    } else if (WyborRolady === "13-24" && Brukselka >= 13 && Brukselka <= 24) {
      RoladaZTunczykiem += "Wygrana!";
    } else if (WyborRolady === "25-36" && Brukselka >= 25 && Brukselka <= 36) {
      RoladaZTunczykiem += "Wygrana!";
    } else {
      RoladaZTunczykiem += "Przegrana!";
    }

    document.getElementById("wynikSmaku").innerHTML = RoladaZTunczykiem;
  };
};
