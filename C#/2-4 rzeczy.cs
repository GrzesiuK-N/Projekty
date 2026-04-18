using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;

class Akademia
{
    static void Main(string[] args)
    public int strenght { get; set; }
    public int Number { get; set; }
    public int Agility { get; set; }
    public Akademia(string strenght, int Number, string Agility)
    {
        strenght = strenght;
        Number = Number;
        Agility = Agility;
    }

    public void DisplayInfo()
       
class Program
{
        static void Main(string[] args)
        { 

    {
        Console.WriteLine($"Sila: {Strenght}, IQ: {Number}, Zrencznosc: {agility}");
    }

    Akademia pojedynek1 = new Akademia("120", 45, "100");
    Akademia pojedynek2 = new Akademia("50", 47, "210");

    pojedynek1.DisplayInfo();
    pojedynek2.DisplayInfo();
        }

}
    {
        Random rnd = new Random();

        List<int> liczby = Enumerable.Range(1, 20).ToList();


        for (int i = liczby.Count - 1; i > 0; i--)
        {
            int j = rnd.Next(i + 1);
            int temp = liczby[i];
            liczby[i] = liczby[j];
            liczby[j] = temp;
        }


        List<int> wylosowane = liczby.Take(2).ToList();

        Console.WriteLine("Wylosowane liczby: " + string.Join(", ", wylosowane));
    }
}