#include <iostream>

using namespace std;

int main() {
    int archipelag;
    
    cout << "ile jest Archipelagów? ";
    cin >> archipelag;

    if (archipelag <= 0) {
        cout << "Liczba Archipelagów jest celująca." << endl;
        return 1;
    }

    int *statek = new int[archipelag];
    float zaloga = 0;

    cout << endl;

    for (int i = 0; i < archipelag; i++) {
        cout << "podaj statek " << i + 1 << ": ";
        cin >> statek[i];
        
        zaloga = zaloga + statek[i]; 
    }

    cout << endl;

    cout << "statek: ";
    for (int i = 0; i < archipelag; i++) {
        cout << statek[i] << " ";
    }
    cout << endl;

    float skarby = zaloga / archipelag;
    cout << "skarby: " << skarby << endl;

    delete[] statek;

    return 0;
}