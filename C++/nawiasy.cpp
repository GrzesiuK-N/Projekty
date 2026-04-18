#include <iostream>
#include <stack>
#include <string>

using namespace std;

int main() {
    string sposob;
    stack<char> stos;
    bool blad = false;

    cout << "podaj sposob: ";
    getline(cin, sposob);

    for (int i = 0; i < sposob.length(); i++) {
        char znak = sposob[i];

        if (znak == '(') {
            stos.push('(');
        } 
        else if (znak == ')') {
            if (stos.empty()) {
                blad = true;
                break;
            } else {
                stos.pop();
            }
        }
    }

    if (blad) {
        cout << "[>-_+<] \nERROR: zamnite nawiasy! [>+_-<]" << endl;
    } 
    else if (!stos.empty()) {
        cout << "[>-_+<] \nERROR: niezamnite nawiasy! [>+_-<]" << endl;
    } 
    else {
        cout << "[>-_+<] \nwszystko OK! [>+_-<]" << endl;
    }

    return 0;
}