#include <iostream>
using namespace std;

// Funkcja typu bool - zwraca true (1) lub false (0)
bool czyParzysta(int liczba) {
    if (liczba % 2 == 0) {
        return true; 
    } else {
        return false;
    }
}

int main() {
    int n;
    cout << "Podaj liczbe calkowita: ";
    cin >> n;

    // Użycie funkcji w instrukcji warunkowej
    if (czyParzysta(n)) {
        cout << "Liczba " << n << " jest parzysta." << endl;
    } else {
        cout << "Liczba " << n << " jest nieparzysta." << endl;
    }

    return 0;
}