#include <iostream>
#include <fstream>
#include <string>
#include <stack>
using namespace std;

int main() {

    setlocale(LC_CTYPE, "Polish");

    stack <string> talerze;

    talerze.push("śniadaniowy");
     talerze.push("mały");
      talerze.push("do herbaty");
       talerze.push("obiadowy");

        cout << "na stronie teraz jest tyle elemtów: " << talerze.size() << endl;

        cout << "na stronie teraz jest obiadowy element: " << talerze.top() << endl;

        cout << "czy stos jest pusty: " << talerze.empty() << endl;

        zdjeto = talerze.top();
        talerze.pop();

        cout << "zdęjęto właśnie tyle talerzy: " << zdjeto << endl;

        cout << "Na stosie teraz jest tyle elementów: " << talerze.size() << endl;


return 0;
}
