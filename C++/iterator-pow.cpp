#include <iostream>
#include <list>

using namespace std;

int main() {
    int ile_liczb;
    int podana_liczba;
    list<int> moja_lista;

    cout << "いくつありますか？ ";
    cin >> ile_liczb;

    for (int i = 1; i <= ile_liczb; i++) {
        cout << "番号を入力してください " << i << ": ";
        cin >> podana_liczba;
        moja_lista.push_back(podana_liczba);
    }

    list<int>::iterator it;
    for (it = moja_lista.begin(); it != moja_lista.end(); it++) {
        if (*it % 3 == 0) {
            cout << *it << " ";
        }
    }

    cout << endl;

    return 0;
}