#include <iostream>

using namespace std;

int main()
{
    float a, b;
    cout << "Podaj a: " << endl;
    cin >> a;
    cout << "Podaj b: " << endl;
    cin >> b;

    float suma = a + b;
    cout << "Suma: " << suma << endl;

    float roznica = a - b;
    cout << "Różnica: " << roznica << endl;

    float iloczyn = a * b;
    cout << "Iloczyn: " << iloczyn << endl;

    float iloraz = a / b;
    cout << "Iloraz: " << iloraz << endl;
        
    return 0;
}