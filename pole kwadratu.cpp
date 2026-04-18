#include <iostream>
#include <cmath>
#include <conio.h>

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
    return (d1 * d2);
}

double obliczObwod(double bok) {
    return 4 * bok;
}

void wyswietlWyniki(double pole, double obwod) {
    cout << "Pole rąbu wynosi: " << pole << endl;
    cout << "Obwód rąbu wynosi: " << obwod << endl;
}
    double d1 = wczytajPrzekatna(1);
    double d2 = wczytajPrzekatna(2);
    double bok = wczytajBok();


    double pole = obliczPole(d1, d2);
    double obwod = obliczObwod(bok);

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
        return (d1 * d2) /2;
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

        int licz1, licz2;

        cout << "Podaj pierwsza liczbe: ";
        cin >> licz1;

        cout << "Podaj druga liczbe: ";
        cin >> licz2;
        int* wsk_licz1 = &licz1;
        int* wsk_licz2 = &licz2;
        int iloczyn = *wsk_licz1 / *wsk_licz2;

        cout << "Suma: " << iloczyn << endl;

    return 0;
}