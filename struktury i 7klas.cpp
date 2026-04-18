#include<iostream>
#include<string>
#include<conio.h>

using namespace std;


    struct Klasa {
        string name1;
        string name2;
        string name3;
        string name4;
        string name5;
        string name6;
        string name7;
        string firstname1;
        string firstname2;
        string firstname3;
        string firstname4;
        string firstname5;
        string firstname6;
        string firstname7;
        string statistic1;
        string statistic2;
        string statistic3;
        string statistic4;
        string statistic5;
        string statistic6;
        string statistic7;
       
};

int main() {
    Klasa toyota;

    toyota.name1 = "Mage";
    toyota.firstname1 = "Hamiji";
    toyota.statistic1 = "hp-120,atk-25,def-35";
    toyota.name2 = "Knight";
    toyota.firstname2 = "Craig";
    toyota.statistic2 = "hp-90,atk-40,def-20";
    toyota.name3 = "Archer";
    toyota.firstname3 = "Carol";
    toyota.statistic3 = "hp-200,atk-15,def-55";
    toyota.name4 = "Assasin";
    toyota.firstname4 = "Piter";
    toyota.statistic4 = "hp-70,atk-65,def-40";
    toyota.name5 = "Priest";
    toyota.firstname5 = "Cristofer";
    toyota.statistic5 = "hp-100,atk-30,def-10";
    toyota.name6 = "Paladin";
    toyota.firstname6 = "Saimon";
    toyota.statistic6 = "hp-220,atk-10,def-80";
    toyota.name7 = "Necromancer";
    toyota.firstname7 = "Gregory";
    toyota.statistic7 = "hp-350,atk-0,def-0";

    cout << "Model: " << toyota.name1 << endl;
    cout << "Model: " << toyota.firstname1 << endl;
    cout << "Model: " << toyota.statistic1 << endl;
    cout << "Model: " << toyota.name2 << endl;
    cout << "Model: " << toyota.firstname2 << endl;
    cout << "Model: " << toyota.statistic2 << endl;
    cout << "Model: " << toyota.name3 << endl;
    cout << "Model: " << toyota.firstname3 << endl;
    cout << "Model: " << toyota.statistic3 << endl;
    cout << "Model: " << toyota.name4 << endl;
    cout << "Model: " << toyota.firstname4 << endl;
    cout << "Model: " << toyota.statistic4 << endl;
    cout << "Model: " << toyota.name5 << endl;
    cout << "Model: " << toyota.firstname5 << endl;
    cout << "Model: " << toyota.statistic5 << endl;
    cout << "Model: " << toyota.name6 << endl;
    cout << "Model: " << toyota.firstname6 << endl;
    cout << "Model: " << toyota.statistic6 << endl;
    cout << "Model: " << toyota.name7 << endl;
    cout << "Model: " << toyota.firstname7 << endl;
    cout << "Model: " << toyota.statistic7 << endl;
    return 0;
}