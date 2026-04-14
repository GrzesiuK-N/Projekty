#include <iostream>
#include <cmath>
#include <iomanip>

using namespace std;

const double A = 1.0;
const double B = 3.0;
const double C = -3.0;

double y(double x) {
    return A * x * x + B * x + C;
}

void miejscazerowe(double a, double b, double c) {
    double delta = b * b - 4 * a * c;
    double p = -b / (2 * a);
    double q = -delta / (4 * a);

    cout << "[>-_+<] Parametry wierzcholka [>+_-<]" << endl;
    cout << "p = " << p << endl;
    cout << "q = " << q << endl;
    cout << "Punkt (p, q) = (" << p << ", " << q << ")" << endl << endl;

    cout << "[>-_+<] Miejsca zerowe [>+_-<]" << endl;
    if (delta > 0) {
        double x1 = (-b - sqrt(delta)) / (2 * a);
        double x2 = (-b + sqrt(delta)) / (2 * a);
        cout << "Delta = " << delta << " (> 0). Dwa miejsca zerowe:" << endl;
        cout << "x1 = " << x1 << " (ok. " << fixed << setprecision(2) << x1 << ")" << endl;
        cout << "x2 = " << x2 << " (ok. " << fixed << setprecision(2) << x2 << ")" << endl;
    } else if (delta == 0) {
        double x0 = -b / (2 * a);
        cout << "Delta = 0. Jedno miejsce zerowe: x0 = " << x0 << endl;
    } else {
        cout << "Delta < 0. nie maoże być takiego zera." << endl;
    }
}

int main() {
    miejscazerowe(A, B, C);

    cout << "\n[>-_+<] elementy wyświetlane [>+_-<]" << endl;
    cout << "y(-5)  = " << y(-5) << endl;
    cout << "y(-3)  = " << y(-3) << endl;
    cout << "y(-1.5)= " << y(-1.5) << " (to jest q)" << endl;
    cout << "y(0)   = " << y(0) << endl;
    cout << "y(1)   = " << y(1) << endl;
    cout << "y(2)   = " << y(2) << endl;

    return 0;
}