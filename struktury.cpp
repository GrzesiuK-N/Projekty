#include<iostream>
#include<string>
#include<conio.h>

using namespace std;


    struct Klasa {
        string brand;
        string model;
        int year;
};

int main() {
    Klasa toyota;
    Klasa mazda;


    mazda.brand
    mazda.model
    mazda.model
    mazda.year

    toyota.brand = "Firma";
    toyota.model = "Tech";
    toyota.year = 2020;

    mazda.brand = "Albert";
    mazda.model = "Nowacki";
    mazda.model = "Pogodny";
    mazda.year = 2024;

    cout << "Brand: " << mazda.brand << endl;
    cout << "Model: " << mazda.model << endl;
    cout << "Model: " << mazda.model << endl;
    cout << "Year: " << mazda.year << endl;

    cout << "Brand: " << toyota.brand << endl;
    cout << "Model: " << toyota.model << endl;
    cout << "Year: " << toyota.year << endl;

    return 0;
}