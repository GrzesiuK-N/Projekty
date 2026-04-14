#include <iostream>
#include <string>

using namespace std;

void wyscig(string nazwa, int liczba) {
    for (int i = 1; i <= liczba; i++) {
        cout << i << " " << nazwa << endl;
    }
}

int main() {
    wyscig("陰の実力者になりたくて！マスターオブガーデン", 777);

    return 0;
}