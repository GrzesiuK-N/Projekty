#include <iostream>

using namespace std;

int main() {
    int liczba_dni;
    int liczba_godzin; 
    const int start = 8; 

    cout << "Podaj liczbę dni: ";
    if (!(cin >> liczba_dni)) {
        cout << "stop. - błąd" << endl;
        return 1;
    }

    cout << "początek to (8:00): ";
    if (!(cin >> liczba_godzin)) {
        cout << "stop. - błąd" << endl;
        return 1;
    }

    cout << "\nWynik:" << endl;

    for (int i = 1; i <= liczba_dni; i++) {
        
        cout << "dzień " << i << ": ";

        int koniec = start + liczba_godzin;

        for (int h = start; h <= koniec; h++) {
            
            cout << h << ":00";

            if (h < koniec) {
                cout << ", ";
            }
        }
        
        cout << endl;
    }

    return 0;
}