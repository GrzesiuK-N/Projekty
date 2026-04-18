#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main() {
    vector<string> lista = {"chleb", "pomidory", "jajka", "mleko", "kwas siarkowy"};
    char wybor;
    string szukany_element;
    string nowy_element;

    while (true) {
        cout << endl;
        for (int i = 0; i < lista.size(); ++i) {
            cout << i + 1 << ". " << lista[i] << endl;
        }

        cout << "\n [>-_+<] D - dodanie do listy [>+_-<]" << endl;
        cout << "U - usuniecie z listy" << endl;
        cout << "W - wyszukanie" << endl;
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
            getline(cin, nowy_element);
            lista.push_back(nowy_element);
        }
        else if (wybor == 'U') {
            cout << "co usunac? ";
            cin.ignore();
            getline(cin, szukany_element);
            for (auto it = lista.begin(); it != lista.end(); ++it) {
                if (*it == szukany_element) {
                    lista.erase(it);
                    break;
                }
            }
        }
        else if (wybor == 'W') {
            cout << "\n [>-_+<] co chcesz wyszukac? [>+_-<]";
            cin.ignore();
            getline(cin, szukany_element);

            bool znaleziono = false;
            for (int i = 0; i < lista.size(); i++) {
                if (lista[i] == szukany_element) {
                    cout << "TAK, to cos jest na pozycji: " << i + 1 << endl;
                    znaleziono = true;
                    break;
                }
            }

            if (!znaleziono) {
                cout << "Nie znaleziono '" << szukany_element << "' na liscie." << endl;
            }
        }
        // --------------------------------
    }

    return 0;
}