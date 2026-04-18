    $(function() {

            //Selektor na id
            $('#wypis').css('color', 'lightgreen');

            //Selektor na class
            $('.opis').css('color', 'darkred');

            //Selektor na tag
            $('h1').css('color', 'cyan');

            //Selektor na grafikę
            $('#grafika').css('width', '800px');

            //obsługa kliknięcia
            $('#przycisk').on('click', function() { 
                $('#grafika').slideToggle(2000);

            });

    });