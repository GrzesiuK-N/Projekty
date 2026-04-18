#include <iostream>
#include <string>

using namespace std;

int main() {
    string slowo;
    int klucz;

    cout << "podaj slowo: ";
    cin >> slowo;
    cout << "podaj klucz: ";
    cin >> klucz;

    for (int i = 0; i < slowo.length(); i++) {
        slowo[i] = ((slowo[i] - 'A' + klucz) % 26) + 'A';
    }

    cout << "slowo o tutaj: " << slowo << endl;

    return 0;
}