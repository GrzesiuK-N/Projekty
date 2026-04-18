using System;

namespace FiguraGeometria
{
    public interface IFiguraMetody
    {
        double ObliczPole();
        double ObliczObwod();
    }

    public abstract class Figura : IFiguraMetody
    {
        public double a;
        public double b;

        public abstract double ObliczPole();
        public abstract double ObliczObwod();
    }

    public class Trapez : Figura
    {
        public double c;
        public double d;
        public double h;

        public Trapez(double a, double b, double c, double d, double h)
        {
            this.a = a; 
            this.b = b; 
            this.c = c; 
            this.d = d; 
            this.h = h; 
        }

        public override double ObliczPole()
        {
            return ((a + b) * h) / 2;
        }

        public override double ObliczObwod()
        {
            return a + b + c + d;
        }
    }

    public class Kolo : Figura
    {
        public double r;

        public Kolo(double r)
        {
            this.r = r;
        }

        public override double ObliczPole()
        {
            return Math.PI * Math.Pow(r, 2);
        }

        public override double ObliczObwod()
        {
            return 2 * Math.PI * r;
        }
    }

    class Program
    {
        static void Main(string[] args)
        {
            Trapez mojTrapez = new Trapez(5, 7, 4, 4, 3);
            Kolo mojeKolo = new Kolo(5);

            Console.WriteLine("[|>-_+<|] TRAPEZ [|>+_-<|]");
            Console.WriteLine($"[|>-_+<|]  Pole: {mojTrapez.ObliczPole()}  [|>+_-<|]");
            Console.WriteLine($"[|>-_+<|]  Obwód: {mojTrapez.ObliczObwod()}  [|>+_-<|]");

            Console.WriteLine("\n[|>-_+<|] KOŁO [|>+_-<|]");
            Console.WriteLine($"[|>-_+<|]   Pole: {mojeKolo.ObliczPole():F2}   [|>+_-<|]");
            Console.WriteLine($"[|>-_+<|]  Obwód: {mojeKolo.ObliczObwod():F2}  [|>+_-<|]");

            Console.ReadKey();
        }
    }
}