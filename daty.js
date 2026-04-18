function aktualizacja() {
    var obiekt_daty = new Date();
    var g = obiekt_daty.getHours();
    var m = obiekt_daty.getMinutes();
    var s = obiekt_daty.getSeconds();
    var mins = obiekt_daty.getMilliseconds();
    document.getElementById('zegar').innerHTML = g + ":" + m + ":"+ s + ":"+ mins;
}

window.onload = function () {
{
    var obiekt_daty = new Date(); // "2025-09-14"
    
  document.getElementById("data_i_czas").innerHTML = obiekt_daty.toString();
  
  document.getElementById("czas_uniwersalny").innerHTML = obiekt_daty.toGMTString(); 

  document.getElementById("czas_regionalny").innerHTML = obiekt_daty.toLocaleString(); 

  document.getElementById("rok").innerHTML = obiekt_daty.getFullYear(); 

  document.getElementById("rok_arbitralny").innerHTML = obiekt_daty.getTimezoneOffset(); 

  //miesiac jest indeksowany od 0, Więć styczeń to 0 a wrzesien to 8
  document.getElementById("miesiac").innerHTML = obiekt_daty.getMonth(); 

  document.getElementById("dzien_miesiaca").innerHTML = obiekt_daty.getDate(); 

  //dzien tygodnia
  //0 - niedziela
  //1- poniedzialek
  //...
  //6 - sobota
  document.getElementById("dzien_tygodnia").innerHTML = obiekt_daty.getDay(); 

  document.getElementById("godzina").innerHTML = obiekt_daty.getHours(); 

  document.getElementById("minuty").innerHTML = obiekt_daty.getMinutes(); 

  document.getElementById("sekundy").innerHTML = obiekt_daty.getSeconds(); 

  document.getElementById("mili_sekundy").innerHTML = obiekt_daty.getMilliseconds(); 

 document.getElementById('przycisk').onclick = aktualizacja;

 //funkcjąca inną funkcję co pewien czas, w naszym przpadku:
 //co 1000ms = 1s

 setInterval(aktualizacja,1000);
}

}


// ćwiczenie 1
// wykonaj stronę, która będzie zawierała przycisk o nazwie "miesiąc", a po jego kliknięciu poniżej przycisku powinna pojawić się polska nazwa aktualnego miesiąca.
//Podpowiedź - zamiast robić 12 instrukcji "if" wykorzystaj fakt, że miesiąc zwrócony przez funkcję getMonth() może być indeksem tablicy.