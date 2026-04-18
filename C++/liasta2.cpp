#include <iostream>
#include <string>
using namespace std;

// Funkcja typu void - nie zwraca wartości, jedynie wykonuje akcję (wypisuje tekst)
void wyswietlMenu(string nazwaUzytkownika) {
    cout << "--- System Logowania ---" << endl;
    cout << "Witaj, " << nazwaUzytkownika << "!" << endl;
    cout << "Wybierz opcje z listy ponizej." << endl;
    cout << "------------------------" << endl;
}

int main() {
    string imie = "Krzysztof";
    
    // Wywołanie funkcji z przekazaniem napisu (string)
    wyswietlMenu(imie);
    
    return 0;
}