using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection.Metadata;
using System.Text;
using System.Threading.Tasks;

namespace figura
{
    public class Figura
    {
        public double a;
        public double b;
        public double c;
        public double d;
        public double h;
        public double r;
        public double pole;
        public double obw;
        public abstract class Trapez : Figura
        {
            public static void Main(double a, double b, double c, double d, double h)
            {
                double pole = ((a + b) * h) / 2;
                Console.WriteLine($"wypisz: " + pole);
                double obw = (a + b + c + d);
                Console.WriteLine($"wypisz: {obw}");
            }

        }


        public class Kolo : Figura
        {
            public static void Main(double r)
            {
                double pole = (3.14159 * (r * r));
                Console.WriteLine($"wypisz: " + (pole));

                double obw = (2 * 3.14159 * r);
                Console.WriteLine($"wypisz: {obw}");
            }

        }

    }

}