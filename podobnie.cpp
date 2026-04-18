#include <iostream>
#include <deque>
#include <string>

using namespace std;

// funkcja bez parametrów i  bez wartoœci
void powitanie(){
    cout << "Hello World!" << endl;
    cout << "Hello Again!" << endl;
}

// funkcja z parametrami, ale bez wartoœci
void odliczanie(int liczba) {
    for (int i = liczba; i >= 0; i--) {
        cout << i << endl;
    }
}

void liczenie(int liczba, string rzecz) {
    for (int i = 1; i <= liczba; i++) {
        cout << i << " " << rzecz << endl;
    }
}

// funkcja z parametrami, zwracaj¹ca wartoœæ
// f(x) = x*x + 2*x + 1
float f(float x) {

    return (x*x + 2*x +1);
}

string szyfr(string napis, int klucz) {
    int dlugosc = napis.length();
    char litera;
    int kod;
    string wynik = "";
    for (int i=0; i < dlugosc; i++) {
        litera = napis[i];
        kod = (int)litera;
        klucz = klucz % 26;
        kod = kod + klucz;
        if (kod > 90)
            kod = kod - 26;
        wynik += (char)kod;
    }
    return wynik;
}

int main()
{
//    setLocale(L_CTYPE, "Polish");

    // wywo³anie funkcji nie zwracaj¹cej wartoœci.
    powitanie();
    cout << "Lubiê pierogi" << endl;
    powitanie();

    int cokolwiek = 5;
    // wywo³anie funkcji z parametrem
    odliczanie(cokolwiek);
    cout << "Lubiê PHP" << endl;
    odliczanie(10);
    liczenie(3, "chêæ do ¿ycia");
    liczenie(20, "Arbuzik");

    /*
    funkcja zwracaj¹cej wartoœci u¿ywamy inaczej ni¿ funkcji bez
    traktujemy j¹ albo jak zmienn¹, albo jak wartoœci;
    wywo³anie funkcji zwracaj¹cej wartoœæ w postaci:


    */

    cout << f(4);
    float wynik =  f(5) * 2;
    cout << wynik << endl;

    cout << szyfr("CEZAR", 3);



}
