#include <iostream>
#include <string>

using namespace std;

string wydluz(string napis1, string napis2) {
    string wynik;
    wynik = napis1 + napis2;
    return wynik;
}

int main() {
    cout << wydluz("ala", " ma kota") << endl;

    return 0;
}
