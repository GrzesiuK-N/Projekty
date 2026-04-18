#include <iostream>
#include <deque>

using namespace std;

int main() {
    int n, liczba;
    deque<int> lista_liczb;

    cout << "ile liczb wpisaæ: ";
    cin >> n;


    for (int i = 1; i <= n; i++) {
        cout << "podaj " << i << " liczbe: ";
        cin >> liczba;

        if (liczba % 2 != 0) {
            lista_liczb.push_front(liczba);
        } else {
            lista_liczb.push_back(liczba);
        }
    }

    cout << endl;
    for (int l : lista_liczb) {
        if (l < 10) {
            cout << l << " ";
        }
    }

    return 0;
}
