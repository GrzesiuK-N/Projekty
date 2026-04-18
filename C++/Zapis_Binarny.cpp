#include <iostream>
#include <stack>

int main() {
    int liczba;
    std::stack<bool> stos;

    std::cout << "Podaj liczbe: ";
    if (!(std::cin >> liczba)) {
        std::cerr << "Blad: Podano nieprawidlowa wartosc." << std::endl;
        return 1;
    }

    if (liczba == 0) {
        std::cout << "0" << std::endl;
        return 0;
    }

    int pomocnicza = liczba;
    while (pomocnicza > 0) {
        bool reszta = pomocnicza % 2;
        stos.push(reszta);

        pomocnicza = pomocnicza / 2;
    }

    std::cout << "Zapis binarny liczby " << liczba << " to: ";
    
    while (!stos.empty()) {
        std::cout << stos.top();
        stos.pop();
    }

    std::cout << std::endl;

    return 0;
}