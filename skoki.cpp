#include <iostream>

using namespace std;

int main() {
    int zupy[10] = {115, 123, 132, 116, 121, 130, 129, 112, 110, 113};
    
    int najpyszniejsza = zupy[0]; 
    int najblizszaMiska = zupy[0];

    for (int i = 0; i < 10; i++) {
        if (zupy[i] > najpyszniejsza) {
            najpyszniejsza = zupy[i];
        }
        if (zupy[i] < najblizszaMiska) {
            najblizszaMiska = zupy[i];
        }
    }

    cout << "|-+-|<] LEVEL 1 i 2 [>|-+-|" << endl;
    cout << "Najpyszniejsza zupa: " << najpyszniejsza << "kg" << endl;
    cout << "Najgorsza zupa: " << najblizszaMiska << "kg" << endl;
    cout << endl;

    int platinium = 0;
    int gold = 0;
    int silver = 0;

    for (int i = 0; i < 10; i++) {

        if (zupy[i] > platinium) {
            silver = gold;      
            gold = platinium;     
            platinium = zupy[i];   
        }
        else if (zupy[i] > gold) {
            silver = gold;      
            gold = zupy[i];  
        }
        else if (zupy[i] > silver) {
            silver = zupy[i];    
        }
    }

    cout << "|-+-|<] LEVEL 3 [>|-+-|" << endl;
    cout << "2 najlepsze zupy: " << platinium << "kg, " << gold << "kg" << endl;
    cout << endl;

    cout << "|-+-|<] LEVEL 4 [>|-+-|" << endl;
    cout << "Platinium coin:   " << platinium << "kg" << endl;
    cout << "Gold coin: " << gold << "kg" << endl;
    cout << "Silver coin: " << silver << "kg" << endl;

    return 0;
}