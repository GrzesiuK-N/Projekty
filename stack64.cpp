#include <iostream>
#include <fstream>
#include <string>
#include <stack>
using namespace std;

int main() {

    setlocale(LC_CTYPE, "Polish");

    stack<int>liczby;

    liczby.push(9);
    liczby.push(3);
    liczby.push(5);
    liczby.pop();
    liczby.pop();
    liczby.push(6);
    liczby.push(1);
    liczby.push(0);
    liczby.pop();
    liczby.push(2);

    cout << "jest 2: " << liczby.top() << endl;

    liczby.pop();

    cout << "jest 2: " << liczby.top() << endl;

    liczby.pop();

     cout << "jest 2: " << liczby.top() << endl;

    liczby.pop();

     cout << "jest 2: " << liczby.top() << endl;

    liczby.pop();


return 0;
}
