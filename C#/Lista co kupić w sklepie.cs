using System;
using System.Collections.Generic;
using System.Linq;

class Program
{
    static void Main(string[] args)
    {
        List<string> items = new List<string>
        {
            "Apple",
            "Banana",
            "Avocado",
            "Orange",
            "Apricot",
            "Mango",
            "Pineapple",
            "Almond",
            "Berry",
            "Anise"
        };

        var filteredAndSortedItems = items
            .Where(item => item.StartsWith("A", StringComparison.OrdinalIgnoreCase))
            .OrderBy(item => item);

        Console.WriteLine("Elementy zaczynające się na literę 'A' (posortowane):");
        foreach (var item in filteredAndSortedItems)
        {
            Console.WriteLine(item);
        }

        Console.WriteLine("Naciśnij dowolny klawisz, aby zakończyć...");
        Console.ReadKey();
    }
}