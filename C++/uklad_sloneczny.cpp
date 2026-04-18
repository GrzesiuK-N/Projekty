#include <iostream>
#include <fstream>
#include <string>

int main() {
    std::string nazwaMango;
    std::string podpis;

    std::cout << "podaj plik w którym podpis będzie podpisany: ";
    std::getline(std::cin, nazwaMango);

    std::cout << "Podaj podpis do podpisu: ";
    std::getline(std::cin, podpis);

    std::ofstream plik(nazwaMango, std::ios::app); // end = end

    if (plik.is_open()) {
        plik << "\n" << podpis;
        
        plik.close();
        std::cout << "Uzytkownik: Podpis podpisany " << std::endl;
    } else {
        std::cerr << "Blad: ?>!" << std::endl;
        return 1;
    }

    return 0;
}