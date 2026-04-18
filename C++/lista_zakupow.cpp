#include <iostream>
#include <vector>
#include <string>
#include <algorithm>

using namespace std;

int main() {
    vector<string> lista = {"chleb", "pomidory", "jajka", "mleko", "kwas siarkowy"};
    char wybor;
    string element;

    while (true) {
        cout << endl;
        for (int i = 0; i < lista.size(); ++i) {
            cout << i + 1 << ". " << lista[i] << endl;
        }

        cout << "\n [>-_+<] D - dodanie do listy  [>+_-<]" << endl;
        cout << "U - usuniecie z listy" << endl;
        cout << "K - koniec programu" << endl;
        cout << "Co chcesz zrobic? ";
        cin >> wybor;
        wybor = toupper(wybor);

        if (wybor == 'K') {
            cout << "do widzenia!" << endl;
            break;
        }

        if (wybor == 'D') {
            cout << "co dodac? ";
            cin.ignore();
            getline(cin, element);
            lista.push_back(element);
        }
        else if (wybor == 'U') {
            cout << "co usunac? ";
            cin.ignore();
            getline(cin, element);

            bool znaleziono = false;
            for (auto it = lista.begin(); it != lista.end(); ++it) {
                if (*it == element) {
                    lista.erase(it);
                    znaleziono = true;
                    break;
                }
            }
            
            if (!znaleziono) {
                cout << "Nie znaleziono takiego elementu na liscie!" << endl;
            }
        }
    }

    return 0;
}