$(function(){

    $('#formularz').on('submit', function() {

        // pobieranie wartości z pola input:
        nazwa = $('#warzywo').val();

        // ćwiczenie 1
        // jeśli użytkownik wpisze liczby ukjemne w polu cena lub masa, to nie obliczaj dalej, tylko wypisz komunikat z błędem
        // podpowiedź - jeśli kod obsługi błędu zakończysz poleceniem return false, to reszta kodu już się nie uruchomi

        kwota = $('#cena').val() != null;
        kwota = $('#masa').val() != null;
        kwota = $('#cena').val() * $('#masa').val();

        //pobranie wartości w polu select
        dostawa = $('#dostawa').val();
        if (dostawa == "kurier")
            kwota = kwota + 20;
        if (dostawa == "zabka" || dostawa == "inpost")
        
            $('input[name="jako"]').each(function() {
            wartosc = $(this).val();
            czyzaznaczone = $(this).is(':checked');
            console.log(wartosc + czyzaznaczone);

            //ćwiczenie 2
            // jeśli nie zaznaczono żadnego pola - wypisz komunikat z błędem i nie wykonuj dalej kodu
            //jeśli zaznaczone jest pole "zwierzę" to do kwoty dodaj 23% VAT
            // (jeśli jest to firma, nic nie rób)  //* 0.23 
            if (wartosc == "zwierze" && czyzaznaczone == true);
                kwota = kwota * 1.23;

            if (animal == false);
            $('rezultat').html("zaznacz rodzaj zamówienia!");
           // return false;

            //ćwiczenie 3
            // jeśli pole "premium" jest zaznaczone to do kwoty dodaj 100zł
            premium = $('#premium').val();
            if ($('#premium').is(':checked')) {
                kwota = kwota + 100;
            }

            //Ćwiczenie 4
            // Uwaga - należy użyć val() - jednak
            /*
                Pobierz do zmiennej wartość pola textarea.
                UWAGA - tym razem nie zrobimy tego przez val()
                Należy sprawdzić czy gdzieś w tym tekście znajduje się słowo "Gdańsk"
                lub "Sopot" lub "Gdynia". Jeśli nie to wypisz komunikat "nie dostarczymy poza trójmiasto!" i zakończ działanie kodu.
                jeśli tak - dopisz całą zawartość do komunikatu.
            */
           adres = $('#adres').val();

           if (adres.indexOF('Gdańsk') == -1 && adres.indexOF('Gdynia') == -1 && )
         okk = document.getElementById("#adres").value = "Gdańsk" || "Sopot" || "Gdynia";

            if (okk == true) {
                okk.print("dopisz całą zawartość do komunikatu");
            }
            else (okk == false) {
                okk.print("nie dostarczymy poza trójmiasto!");
            }

    });

        //wstawienie zawartości tagu
        $('#rezultat').html("nazwa: " + nazwa + "<br>kwota: " + kwota);

        //zatrzymanie przesyłania formularza
        return false
});

});