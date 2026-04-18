<?php

// plik ten sprawdza poprawność hasła z godnie z zasadami, jeżeli hasło jest poprawna wpuszcza cię na dany poziom




$rules = [];
$levels = [
    0 => ['name'=>"Witaj w Przeklętych lochach","desc"=>"Jak to działa? Proste każda zakadka składa się z jednego INPUTA typu PASSWORD, które przekazujesz za pomocą przycisku <br>
    Jeżeli zgadłeś hasło, przechodzisz dalej w przeciwnym wypadku cofasz się o 1 poziom!",'req'=>0]
];

function is_right($value) {
    global $rules;
    for ($i = 0; $i < count($rules); $i++){
        if (!( $rules[$i]($value))) {
            return false;
        }
    }
    return true;
}