#include <iostream>
#include <conio.h>
using namespace std;
int main() {
	

	int licz1, licz2;

	cout << "Podaj pierwsza liczbe: ";
	cin >> licz1;

	cout << "Podaj druga liczbe: ";
	cin >> licz2;
	int* wsk_licz1 = &licz1;
	int* wsk_licz2 = &licz2;
	int suma = *wsk_licz1 - *wsk_licz2;

	cout << "Suma: " << suma << endl;

	
	return (0);
}