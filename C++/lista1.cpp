#include <iostream>
using namespace std;

// Funkcja typu double - przyjmuje dwa parametry i zwraca wynik mnożenia
double obliczPole(double a, double b) {
    return a * b; // instrukcja return jest obowiązkowa
}

int main() {
    double bok1 = 5.5, bok2 = 4.0;
    
    // Wywołanie funkcji i zapisanie wyniku do zmiennej
    double wynik = obliczPole(bok1, bok2);
    
    cout << "Pole prostokata o bokach " << bok1 << " i " << bok2 << " wynosi: " << wynik << endl;
    
    return 0;
}