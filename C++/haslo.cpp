#include <iostream>
#include <fstream>

int main() {
    std::ofstream plik("hasla.txt");

    if (plik.is_open()) {
        for (char i = 'A'; i <= 'Z'; ++i) {
            for (char j = 'A'; j <= 'Z'; ++j) {
                for (char k = 'A'; k <= 'Z'; ++k) {
                    plik << i << j << k << "\n";
                }
            }
        }

        plik.close();
        std::cout << "Gotowe!: haslo zostalo napisane.txt" << std::endl;
    } else {
        std::cerr << "Blad?" << std::endl;
        return 1;
    }

    return 0;
}