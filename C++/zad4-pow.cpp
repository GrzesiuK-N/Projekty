#include <iostream>

using namespace std;

void gwiazdki(int n) {
    for (int wiersz = 1; wiersz <= n; wiersz++) {
        for (int kolumna = 1; kolumna <= wiersz; kolumna++) {
            cout << "* ";
        }
        cout << endl;
    }
}

int main() {
    gwiazdki(5);

    return 0;
}