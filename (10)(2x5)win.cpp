#include <iostream>

int main() {
    int pociski = 10;     
    int punkty = 0;       
    int strzaly = 0;      

    while (pociski > 0 && punkty < 5) {
        int trafiony;
        std::cout << "Czy trafiłeś? (1 = tak, 0 = nie): ";
        std::cin >> trafiony;

        pociski--;        
        strzaly++;        

        if (trafiony == 1) {
            if (strzaly == 2) { 
                punkty++;
                strzaly = 0;  
                std::cout << "Zdobyłeś punkt! Masz teraz " << punkty << " punkty.\n";
            }
        }
        else {
            std::cout << "Pudło! Przegrana.\n";
            return 0;  
        }
    }

    if (punkty == 5) {
        std::cout << "Wygrałeś!\n";
    }
    else {
        std::cout << "Przegrana! Zabrakło pocisków.\n";
    }

    return 0;
}