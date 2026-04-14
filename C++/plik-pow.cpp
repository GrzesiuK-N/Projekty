#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main() {
    ifstream moj_plik("liczby.txt");

    string tekst_z_pliku;
    
    getline(moj_plik, tekst_z_pliku);
    int liczba_n = stoi(tekst_z_pliku);

    int tablica_liczb[1000];

    for (int i = 0; i < liczba_n; i++) {
        getline(moj_plik, tekst_z_pliku);
        tablica_liczb[i] = stoi(tekst_z_pliku);
    }

    int najmniejsza_wartosc = tablica_liczb[0];
    int miejsce_najmniejszej = 0;

    for (int i = 1; i < liczba_n; i++) {
        if (tablica_liczb[i] < najmniejsza_wartosc) {
            najmniejsza_wartosc = tablica_liczb[i];
            miejsce_najmniejszej = i;
        }
    }

    tablica_liczb[miejsce_najmniejszej] = -2000;

    for (int i = 0; i < liczba_n; i++) {
        cout << tablica_liczb[i] << " ";
    }

    moj_plik.close();

    return 0;
}