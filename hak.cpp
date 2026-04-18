#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main() {

    string linia;

    ifstream plikOdczytu("wiersz.txt");

   // ifstream plikOdczytu (" ") << endl;
   // ifstream plikOdczytu ("wypisano linii: 27") << endl;

    while (getline(plikOdczytu, linia)) {
    cout << linia << endl;
    }


   cout<< ("ąćęłńóśżźĄĆĘŁŃÓŚŻŹ")<<endl<<endl; // ąćęłńóśżźĄĆĘŁŃÓŚŻŹ

   char str[50] = {0,};

  cout<<"Podaj jaki˜ś tekst: ";
  cin.getline(str, sizeof(str)/ sizeof(char));

  cout<<endl<<endl<<"Testowy tekst: "<<str<<endl<<endl;
  cin.get();
    plikOdczytu.close();

 return 0;
}
