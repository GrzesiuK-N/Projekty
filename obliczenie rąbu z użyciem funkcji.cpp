#include <iostream>
#include <cmath>

using namespace std;

double wczytajPrzekatna(int numer) {
    double przekatna;
    cout << "Podaj długość " << numer << "-ej przekątnej: ";
    cin >> przekatna;
    return przekatna;
}

double wczytajBok() {
    double bok;
    cout << "Podaj długość boku rąbu: ";
    cin >> bok;
    return bok;
}

double obliczPole(double d1, double d2) {
    return (d1 * d2) / 2;
}

double obliczObwod(double bok) {
    return 4 * bok;
}

void wyswietlWyniki(double pole, double obwod) {
    cout << "Pole rąbu wynosi: " << pole << endl;
    cout << "Obwód rąbu wynosi: " << obwod << endl;
}

int main() {
    double d1 = wczytajPrzekatna(1);
    double d2 = wczytajPrzekatna(2);
    double bok = wczytajBok();


    double pole = obliczPole(d1, d2);
    double obwod = obliczObwod(bok);

    wyswietlWyniki(pole, obwod);

    return 0;
}