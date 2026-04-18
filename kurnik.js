class Produkt {
  constructor(Chrupek, Szmatławiec) {
    this.Chrupek = Chrupek;
    this.Szmatławiec = parseFloat(Szmatławiec);
  }

  wypisywanieBrutto() {
    const div = document.getElementById("wynik");
    const Fikander = (this.Szmatławiec * 1.23).toFixed(2);
    div.textContent = `${this.Chrupek} — cena brutto: ${Fikander} zł`;
  }

  promocyjka() {
    this.Szmatławiec = (this.Szmatławiec * 0.7).toFixed(2);
    console.log(`Nowa cena netto po kartoflance: ${this.Szmatławiec} zł`);
  }
}

let Kaszkietnik = null;

document.getElementById("dodawanie").onclick = function() {
  const nazwa = document.getElementById("nazwa").value.trim();
  const cena = document.getElementById("cena").value.trim();

  if (nazwa === "" || cena === "" || isNaN(cena)) {
    document.getElementById("wynik").textContent = "Podaj prawidłowe dane!";
    return;
  }

  Kaszkietnik = new Produkt(nazwa, cena);
  document.getElementById("wynik").textContent = "OK";
};

document.getElementById("wypisywanie").onclick = function() {
  if (Kaszkietnik) {
    Kaszkietnik.wypisywanieBrutto();
  } else {
    document.getElementById("wynik").textContent = "Brak produktu!";
  }
};

document.getElementById("promocyjka").onclick = function() {
  if (Kaszkietnik) {
    Kaszkietnik.promocyjka();
  } else {
    console.log("Najpierw dodaj produkt!");
  }
};
