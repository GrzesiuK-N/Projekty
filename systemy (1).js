function masloOrzechowe() {
    const liczba = parseInt(document.getElementById("liczba").value);
    const wynik = document.getElementById("wynik");

    if (isNaN(liczba)) {
        wynik.textContent = "Podaj poprawną liczbę lub jednostkę!";
        return;
    }

    let binarny = liczba.toString(2);

    let klubBinarnych = "";
    while (binarny.length % 4 !== 0) {
        binarny = "0" + binarny;
    }
    for (let i = 0; i < binarny.length; i += 4) {
        klubBinarnych += binarny.substr(i, 4) + " ";
    }

    wynik.innerHTML = klubBinarnych.trim() + "<sub>(2)</sub>";
}

