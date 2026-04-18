#include <iostream>
  
  using namespace std;
double podatek(double kwota_dochodu) {
    if (kwota_dochodu > 30000) {
        return (kwota_dochodu - 30000) * 0.12;
    } else {
        return 0;
    }
}

int main() {
    cout << "Dla 25000: " << podatek(25000) << endl;  
    cout << "Dla 40000: " << podatek(40000) << endl;  
    return 0;
}