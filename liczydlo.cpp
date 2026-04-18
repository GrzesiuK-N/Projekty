#include <iostream>
#include <string>

using namespace std;

int main() {
    string napis;
    int liczydlo[26] = {0};

    cout << "Podaj napis: ";
    cin >> napis;

    for (int i = 0; i < napis.length(); i++) {
        char litera = napis[i];

        int ascii_indeks = litera - 'A';

        if (ascii_indeks >= 0 && ascii_indeks < 26) {
            liczydlo[ascii_indeks]++;
        }
    }

    cout << "\n[-=-/<]Wyniki zliczania z liczydla:      [>/+=+]\n";
    for (int i = 0; i < 26; i++) {
        char litera = i + 'A';
        cout << litera << " " << liczydlo[i] << endl;
    }

    return 0;
}