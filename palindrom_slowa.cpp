#include <iostream>
#include <string>

using namespace std;

int main() {
    string napis;

    cout << "Podaj napis: ";
    
    getline(cin, napis);

    int dlugosc = napis.length();
    bool jest = true;

    for (int i = 0; i < dlugosc / 2; i++) {
        
        if (napis[i] != napis[dlugosc - 1 - i]) {
            cout << "NIE" << endl;
            jest = false;
            break;
        }
    }

    if (jest == true) {
        cout << "TAK" << endl;
    }

    return 0;
}