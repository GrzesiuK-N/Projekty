using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Zajecia;


public class Kuna : Kangur
{
    public double h { get; set; }

    public Kuna(double a_, double h_)
    {
        this.a = a_;
        this.h = h_;

    }
    public void showtrojkat()
    {
        double pole = a * h / 2;
        Console.WriteLine($"{pole}");
    }
}

