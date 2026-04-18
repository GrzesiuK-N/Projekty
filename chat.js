window.onload = function() {
    document.getElementById('wyslij').onclick = function() {
        console.log("start");
        var text = document.getElementById('text').value;
        var div = document.createElement("div");
        div.classList.add("wyp");
        div.classList.add("jola");

        var img = document.createElement("img"); //po
        img.src = "Jolka.jpg"; //po
        img.alt = "Jolanta Nowak"; // powtrzy

        var p = document.createElement("p");
        p.innerHTML = text;
        div.appendChild(img);
        div.appendChild(p);

        var parent = document.getElementById("chat");
        parent.appendChild(div);

        parent.scrollTop = parent.scrollHeight;
    }

    document.getElementById('gen').onclick = function() {
        var tablica = [
            "Świetnie!",
            "Kto gra główną rolę?",
            "Lubisz filmy Tego reżysera?",
            "Będę 10 minut wcześniej",
            "Może kupimy sobie popcorn?",
            "Ja wolę Colę",
            "Zaproszę jeszcze Grześka",
            "Tydzień temu też byłem w kinie na Diunie",
            "Ja funduję bilety"
        ];

       var index = Math.round(Math.random() * 8);

       var div = document.createElement("div");
        div.classList.add("wyp");
        div.classList.add("krzysiek");

       var img = document.createElement("img"); //po
        img.src = "Krzysiek.jpg"; //po
        img.alt = "Krzysztof Łukasiński"; // powtrzy

        var p = document.createElement("p");
        p.innerHTML = tablica[index];
        div.appendChild(img);
        div.appendChild(p);

        var parent = document.getElementById("chat");
        parent.appendChild(div);

        parent.scrollTop = parent.scrollHeight;
    }
}