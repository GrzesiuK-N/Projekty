#include <iostream>
#include <vector>      
#include <algorithm>  

using namespace std;

int main() {
    int liczbaUczniow;
    
    cout << "ile jest uczniow: ";
    cin >> liczbaUczniow;

    vector<int> uczniowie;

    for (int i = 0; i < liczbaUczniow; i++) {
        int wiek;
        cout << "podaj wiek: ";
        cin >> wiek;
        uczniowie.push_back(wiek);
    }

    int pelnoletni = 0;
    int bledni = 0;
    double sumaWiekuZgodnych = 0;
    int licznikZgodnych = 0;

    for (int wiek : uczniowie) {
        if (wiek >= 18) {
            pelnoletni++;
        }

        if (wiek < 6 || wiek > 120) {
            bledni++;
        } else {
            sumaWiekuZgodnych += wiek;
            sumaWiekuZgodnych++;
        }
    }

    cout << "\n [>-_+<] uczniow pelnoletnich jest: [>+_-<]" << pelnoletni << endl;
    cout << "blednie dodano uczonych: " << bledni << endl;

    if (licznikZgodnych > 0) {
        cout << "sredni wiek uczniow: " << sumaWiekuZgodnych / licznikZgodnych << endl;
    } else {
        cout << "średni wiek uczniów: 0 (brak poprawnych danych/dodatkowa odpowiedź w postaci: (...))" << endl;
    }

    sort(uczniowie.begin(), uczniowie.end());

    cout << "posortowani uczniowie:" << endl;
    for (int i = 0; i < uczniowie.size(); i++) {
        cout << uczniowie[i] << endl;
    }

    return 0;
}