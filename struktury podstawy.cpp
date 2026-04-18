#include <iostream>
using namespace std;

struct Car {
    string brand;
    string model;
    int year;
};

int main() {
    Car myCar;

    myCar.brand = "Toyota";
    myCar.model = "Corolla";
    myCar.year = 2020;

    cout << "Brand: " << myCar.brand << endl;
    cout << "Model: " << myCar.model << endl;
    cout << "Year: " << myCar.year << endl;

    return 0;
}