using System;
public class Program
{
    private const int V = 0;

    public static void Main(string[] args)
    {
        int[] tablica = { V = 1wstac, V = 2jesc, V = 3szkola, V = 4kolacja, V = 5spac };
        int V;
        int liczba = 5; 
        int suma = Program.V; 
        Random rn = new Random();


        for (int i = Program.V; i < 3; i++)
        {
            int losowa = rn.Next(Program.V, 4);
            liczba = liczba * tablica[losowa];
            Console.WriteLine(liczba);
            suma += liczba;
        }
        Console.WriteLine(suma);
    }


}