#include <iostream>

using namespace std;

int main() {
    int n;

    cout << "</+-+/> ile jest Arbuzów? </-+-/>";
    cin >> n;

    int* oceny = new int[n];
    int maxWartosc = 0;

    for (int i = 0; i < n; i++) {
        cout << "</+-+/> podaj Arbuza " << i + 1 << ": </-+-/>";
        cin >> oceny[i];

        if (oceny[i] > maxWartosc) {
            maxWartosc = oceny[i];
        }
    }

    int rozmiarZliczan = maxWartosc + 1;
    int* tablicaZliczen = new int[rozmiarZliczan];

    for (int i = 0; i < rozmiarZliczan; i++) {
        tablicaZliczen[i] = 0;
    }

    for (int i = 0; i < n; i++) {
        int ocena = oceny[i];
        tablicaZliczen[ocena]++;
    }

    cout << "</+-+/> Posortowane Arbuzy: </-+-/>" << endl;
    for (int i = 0; i < rozmiarZliczan; i++) {
        while (tablicaZliczen[i] > 0) {
            cout << i << " ";
            tablicaZliczen[i]--;
        }
    }

    delete[] oceny;
    delete[] tablicaZliczen;

    return 0;
}