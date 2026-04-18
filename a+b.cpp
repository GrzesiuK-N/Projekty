#include <iostream>

int main() {
    int a, b;

    std::cout << "Podaj pierwsza liczbe: ";
    std::cin >> a;

    std::cout << "Podaj druga liczbe: ";
    std::cin >> b;

    int suma = a + b;

    std::cout << "Suma: " << suma << std::endl;

    return 0;
}