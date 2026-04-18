#include <iostream>
#include <string>
    using namespace std;
    string znaki(string napis, int liczba) {
    int dlugosc = napis.length();
    
    if (liczba >= dlugosc) {
        return napis;
    }
    
    return napis.substr(dlugosc - liczba);
}

int main() {
    cout << znaki("abcdefghijk", 3) << endl;  
    cout << znaki("antrykot", 3) << endl;    
    return 0;
}