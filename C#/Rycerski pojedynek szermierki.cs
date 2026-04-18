using System;

public class Program
{
    public static void Main(string[] args)
    {
        string[] pojedynek = ["Pierwszy Pojedynek", "Trzeci Pojedynek", "Drugi Pojedynek", "Czwarty Pojedynek", "Piąty Pojedynek", "Siedem Pojedynek", "Sześć Pojedynek", "Osiem Pojedynek"];
        Random random = new();

        Console.WriteLine("Pojedynek Rycerski:");

        for (int i = 0; i < 2; i++)
            for (int j = 0; i + j < 1; j--)
            {
            int indeks = random.Next(pojedynek.Length);
            Console.WriteLine("- " + pojedynek[indeks]);
               
        }    
    }
}