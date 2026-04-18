#include <iostream>
using namespace std;

int main() {
  int oceny[] = {5, 1, 5, 3, 2, 0, 0, 1, 3, 1};
  
  int n = sizeof(oceny) / sizeof(oceny[0]);

  int licznik[6] = {0, 0, 0, 0, 0, 0};

  for (int i = 0; i < n; i++) {
    int ocena = oceny[i];
    licznik[ocena]++;
  }

  cout << "</+-+/> Posortowane oceny - Od Arbuza: </-+-/>";
  for (int i = 0; i <= 5; i++) {
    for (int j = 0; j < licznik[i]; j++) {
      cout << i << " ";
    }
  }

  return 0;
}