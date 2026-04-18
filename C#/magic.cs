using System;

namespace Overlord
{
    enum Zywiol
    {
        Ogien,
        Woda,
        Ziemia,
        Powietrze
    }

    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("System Walki Maga\n");

            Random random = new Random();
            Zywiol przeciwnik = (Zywiol)random.Next(0, 4);
            int hpPrzeciwnika = 100;

            Console.WriteLine($"Pojawił się przeciwnik żywiołu: {przeciwnik}!");
            Console.WriteLine($"hp przeciwnika: {hpPrzeciwnika}\n");

            while (hpPrzeciwnika > 0)
            {
                Console.WriteLine("\nWybierz zaklęcie (żywioł):");
                Console.WriteLine("1. Ogień");
                Console.WriteLine("2. Woda");
                Console.WriteLine("3. Ziemia");
                Console.WriteLine("4. Powietrze");
                Console.Write("Twój wybór: ");

                string wybor = Console.ReadLine();
                Zywiol wybraneZakletcie;

                switch (wybor)
                {
                    case "1":
                        wybraneZakletcie = Zywiol.Ogien;
                        break;
                    case "2":
                        wybraneZakletcie = Zywiol.Woda;
                        break;
                    case "3":
                        wybraneZakletcie = Zywiol.Ziemia;
                        break;
                    case "4":
                        wybraneZakletcie = Zywiol.Powietrze;
                        break;
                    default:
                        Console.WriteLine("Nieprawidłowy wybór dlaczego? Spróbuj ponownie!");
                        continue;
                }

                Console.WriteLine($"\nRzucasz zaklęcie: {wybraneZakletcie}!");
                int obrazenia = ObliczObrazenia(wybraneZakletcie, przeciwnik);
                Console.WriteLine($"Zadane obrażenia: {obrazenia}");

                hpPrzeciwnika -= obrazenia;
                if (hpPrzeciwnika < 0)
                    hpPrzeciwnika = 0;

                Console.WriteLine($"Pozostałe hp przeciwnika: {hpPrzeciwnika}");
            }

            Console.WriteLine("\n Gratulacje ale czy aby na pewno Pokonałeś przeciwnika? - jej Gratulacje!");
            Console.ReadKey();
        }
        static int ObliczObrazenia(Zywiol zakletcie, Zywiol przeciwnik)
        {
            int podstawoweObrazenia = 20;

            if (zakletcie == przeciwnik)
            {
                Console.WriteLine("Przeciwnik jest odporny na ten żywioł, ale jeśli użyjesz tego samego to też będziesz. :)");
                return 0;
            }

            bool czyPrzeciwny = false;

            switch (zakletcie)
            {
                case Zywiol.Ogien:
                    if (przeciwnik == Zywiol.Woda)
                        czyPrzeciwny = true;
                    break;

                case Zywiol.Woda:
                    if (przeciwnik == Zywiol.Powietrze)
                        czyPrzeciwny = true;
                    break;

                case Zywiol.Ziemia:
                    if (przeciwnik == Zywiol.Ogien)
                        czyPrzeciwny = true;
                    break;

                case Zywiol.Powietrze:
                    if (przeciwnik == Zywiol.Ziemia)
                        czyPrzeciwny = true;
                    break;
            }

            if (czyPrzeciwny)
            {
                Console.WriteLine("Obrażenia x2? lub x3 a w sumie to są 2x + 0,5 a jednak pierwsze poprawne :)");
                return podstawoweObrazenia * 2;
            }

            return podstawoweObrazenia;
        }
    }
}
