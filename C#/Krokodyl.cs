using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;

using Chomik_Begalski;


public class Krokodyl : Kangur
{


    public Krokodyl(double a_, double b_)
    {
        this.a = a_;
        this.b = b_;

    }
    public void showKwadrat()
    {
        double pole = a * a;
        Console.WriteLine($"{pole}");
    }
}
    

