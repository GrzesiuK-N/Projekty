#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main() {

    string linia;
    ifstream plikOdczytu("wiersz.txt");

    while (getline(plikOdczytu, linia)) {
        cout << linia << endl;

    }
    plikOdczytu.close();

 return 0;
}
