using System;

public class Program
{
    public static void Main(string[] args)
    {
        string[] czynnosci = { "Poranna gimnastyka", "Śniadanie", "Praca", "Obiad", "Relaks", "Spacer", "Czytanie książki", "Sen" };
        Random random = new Random();

        Console.WriteLine("Codzienna rutyna:");

        for (int i = 0; i < 5; i++)
        {
            int indeks = random.Next(czynnosci.Length);
            Console.WriteLine("- " + czynnosci[indeks]);
        }
    }
}
