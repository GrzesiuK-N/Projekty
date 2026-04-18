#include <iostream>
#include <fstream>
#include <string>

int main() {
    std::ifstream plik("linie.txt");

    if (!plik.is_open()) {
        std::cerr << "Blad: ---> linie.txt" << std::endl;
        return 1;
    }

    std::string linia;
    int przelicznik = 0;

    while (std::getline(plik, linia)) {
        przelicznik++;
    }

    plik.close();

    std::cout << "(Wypisano linii: " << przelicznik << ")" << std::endl;

    return 0;
}