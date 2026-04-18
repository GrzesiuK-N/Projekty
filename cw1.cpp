// Ćw.1
#include <iostream>

using namespace std;

int main() {
    int liczba;
    cout << "podaj liczbe agrestów: ";
    cin >> liczba;
    for (int i = 0; i < liczba; ++i) {
        cout << "*";
    }
    cout << endl;
    return 0;
}