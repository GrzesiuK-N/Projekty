#include <iostream>
#include <locale.h>
#include <vector>

using namespace std;

int main() {
    setlocale(LC_CTYPE, "Polish");

    vector <string> kotki;

    kotki.push_back("Felix");
    kotki.push_back("Gucio");
    kotki.push_back("Puszek");
    kotki.push_back("Zenek");
    kotki.push_back("Roxy");

    for (int i = 0; i < kotki.size(); i++) {
        cout << kotki[i] << endl;
    }

    //int n, liczba;
    //deque<int> lista_liczb;

    cout << "trzeci kotek: " << kotki[2].size() << endl;
    cout << "ile wektorów: " << kotki.size() << endl;

    string kotek = kotki.back();
    cout << "na koñcu wektora jest: " << kotek.size() << endl;

    kotki.pop_back();
    cout << "po zabraniu jednego kotka do domu, na koñcu wektora jest: " << kotki.back() << endl;

    string poszukiwany;
    cout << "podaj imie poszukiwanego kotka: ";
    cin >> poszukiwany;
    bool czy_znaleziono = false;
    for (string element : kotki) {
        if (element == poszukiwany) {
            cout << "znalaz³em!" << endl;
            czy_znaleziono = true;
        }
    }
    if (czy_znaleziono == false) {
        cout << "nie znaleziono" << endl;
    }

    // usuniêcie drugiego kotka:

    kotki.erase(kotki.begin() + 1);

    cout << "po usuniêciu drugiego kotka: " << endl;
    for (string e : kotki) {
        cout << e << endl;

    return 0;
}



    //cin >> n;

 return 0;
}
