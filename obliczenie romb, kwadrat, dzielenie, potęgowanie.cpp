#include <iostream>
#include <cmath>

using namespace std;

void poleKwadratu(double* bok, double* wynik) {
    *wynik = (*bok) * (*bok);
}

void poleRombu(double* d1, double* d2, double* wynik) {
    *wynik = (*d1) * (*d2) / 2;
}

void potegowanie(double* podstawa, double* wykladnik, double* wynik) {
    *wynik = pow(*podstawa, *wykladnik);
}

void dzielenie(double* a, double* b, double* wynik) {
    if (*b != 0)
        *wynik = (*a) / (*b);
    else
        cout << "Błąd: dzielenie przez zero!" << endl;
}

int main() {
    double bok, d1, d2, podstawa, wykladnik, a, b, wynik;

    cout << "Podaj bok kwadratu: ";
    cin >> bok;
    poleKwadratu(&bok, &wynik);
    cout << "Pole kwadratu: " << wynik << endl;

    cout << "Podaj długości przekątnych rombu (d1 i d2): ";
    cin >> d1 >> d2;
    poleRombu(&d1, &d2, &wynik);
    cout << "Pole rombu: " << wynik << endl;

    cout << "Podaj podstawę i wykładnik: ";
    cin >> podstawa >> wykladnik;
    potegowanie(&podstawa, &wykladnik, &wynik);
    cout << podstawa << "^" << wykladnik << " = " << wynik << endl;

    cout << "Podaj liczby do podzielenia (a / b): ";
    cin >> a >> b;
    dzielenie(&a, &b, &wynik);
    if (b != 0) {
        cout << a << " / " << b << " = " << wynik << endl;
    }

    return 0;
}