using System;
using System.IO;
using System.Linq;
using System.Text;

// cały program powinien zawierać dwie rzeczy z zadania: ("Dry" oraz "kiss")
// - sam opis ten opisuje doskonale cały kod poniżej.

namespace Nazwa
{
    enum Produkty
    {
        Warzywa,
        Owoce
    }

    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("=== Jak zachować produkty i nie zbankrutować ===\n");

            Random random = new Random();
            Produkty torba = (Produkty)random.Next(0, 2);
            int kwotaWkoszyku = 900;
            

            Console.WriteLine($"pierwsze produkty {torba}!");
            Console.WriteLine($"Koszyka pojemność {kwotaWkoszyku}\n");

            while (kwotaWkoszyku > 0)
            {
                Console.WriteLine("\nWybierz 'warzywa' lub 'owoce'");
                Console.WriteLine("1. Warzywa");
                Console.WriteLine("2. Owoce");
                Console.Write("Twój wybór: ");

                string wybor = Console.ReadLine();
                Produkty zatrudnionyOdbiorca;

                switch (wybor)
                {
                    case "1":
                        zatrudnionyOdbiorca = Produkty.Warzywa;
                        break;
                    case "2":
                        zatrudnionyOdbiorca = Produkty.Owoce;
                        break;
                    default:
                        Console.WriteLine("sklep nie posiada tego przyjdź następnego dnia.");
                        continue;
                }

                Console.WriteLine($"\nO tam jest kolejny {zatrudnionyOdbiorca}!");

                int podatek = ObliczObrazenia(zatrudnionyOdbiorca, torba);

                Console.WriteLine($"przytłaczająca cena {podatek}");
                kwotaWkoszyku -= podatek;

                if (kwotaWkoszyku < 0)
                    kwotaWkoszyku = 0;

                Console.WriteLine($"Tyle miejsca w koszyku. {kwotaWkoszyku}");
            }

            Console.WriteLine("\n|-+-|<] Gratulacje wydałeś resztki piniędzy na jedzenie [>|-+-|");
            Console.ReadKey();
        }



        static int ObliczObrazenia(Produkty sprzedawca, Produkty koszyk)
        {
            int dwadzieciaZloty = 70;

            if (sprzedawca == koszyk)
            {
                Console.WriteLine("do koszyka się to nie zmieści");
                return 0;
            }

            bool czyKoszyk = false;

            switch (sprzedawca)
            {
                case Produkty.Warzywa:
                    if (koszyk == Produkty.Owoce)
                        czyKoszyk = true;
                    break;

                case Produkty.Owoce:
                    if (koszyk == Produkty.Warzywa)
                        czyKoszyk = true;
                    break;
            }

            if (czyKoszyk)
            {
                Console.WriteLine("odjąć cene x2");
                return (int) (dwadzieciaZloty * 1.20);
            }

            return dwadzieciaZloty;
        }
    }
}