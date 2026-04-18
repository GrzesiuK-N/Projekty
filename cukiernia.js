window.onload = function() {
      document.getElementById('ryba_olejna').onclick = function () {

       lukrecjowany_kurczak = document.getElementById('imie').value

       lukrecjowany_kurczak = document.getElementById('nazwisko').value

            wybor = document.getElementById('jedzenie').value;
    if (wybor < "brak") {
        document.getElementById('ryba_olejna').innerHTML = "nie prawidłowy zasób słów";
        return false
    }

        if (email) {
            document.getElementById('email'.innerHTML = str(" adres email powinien być z domeny") + 'gmail.com')
        }

      }
}

















/*
Dla załączonego pliku HTML napisz skrypt w cukiernia.js, który będzie sprawdzał prawidłowość przesłanych danych.
W przypadku dowolnego błędu - przesyłanie formularza powinno być wstrzymane za pomocą instrukcji return false; oraz powinien zostać wyświetlony sensowny komunikat o błędzie w polu z id "error"


1. wybór nie może być słowem "brak"
2. liczba sztuk powinna być w zakresie <2, 20>
3. imię i nazwisko powinny być o długości co najmniej 2 znaki każde
4. numer telefonu powinien zawierać dokładnie 9 znaków
5. adres email powinien być z domeny "gmail.com"

==================

zadanie dodatkowe:
6. Sprawdź także datę odbioru. Aby to zrobić:
- sprawdź najpierw jaka jest dzisiejsza data i czy data odbioru nie jest z przeszłości
- data odbioru może być maksymalnie za dwa tygodnie. Jeśli data odbioru jest większa niż dwa tygodnie od dziś, to wyświetl błąd.
- data odbioru powinna być najwcześniej jutro.
wskazówka - obiekt Date() można utworzyć nie tylko dla obecnej daty, ale także dla innej, np. Date('2025-09-30')
*/