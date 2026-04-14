#include <iostream>

using namespace std;

double pole_trapezu(double podstawa_a, double podstawa_b, double wysokosc) {
    double wynik;
    wynik = (podstawa_a + podstawa_b) * wysokosc / 2.0;
    return wynik;
}

int main() {
    cout << "台形の面積は: " << pole_trapezu(3.5, 6.1, 8) << endl;

    return 0;
}