using System;
using System.IO;
using System.Linq;
using System.Text;
using System.Collections.Generic;

class Kurnik
{
    public string Nazwa { get; set; }
    public int Sila { get; set; }
    public int Zrecznosc { get; set; }
    public int IQ { get; set; }

    public Kurnik(string nazwa, int sila, int zrecznosc, int iq)
    {
        Nazwa = nazwa;
        Sila = sila;
        Zrecznosc = zrecznosc;
        IQ = iq;
    }

    public override string ToString()
    {
        return $"{Nazwa} (Siła: {Sila}, Zręczność: {Zrecznosc}, IQ: {IQ})";
    }
}

class Program
{
    static Random rand = new Random();

    static void Main()
    {
        List<Kurnik> kury = new List<Kurnik>
        {
            new Kurnik("test mięsa KFC 1", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 2", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 3", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 4", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 5", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 6", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 7", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100)),
            new Kurnik("test mięsa KFC 8", rand.Next(50, 100), rand.Next(50, 100), rand.Next(50, 100))
        };

        Console.WriteLine("|-+-<] TURNIEJ KUR ZACZYNA SIĘ! [>-+-|\n");

        int runda = 1;

        while (kury.Count > 1)
        {
            Console.WriteLine($"|-+-<] Runda {runda} [>-+-|\n");

            TasujListe(kury);
            List<Kurnik> zwyciezcy = new List<Kurnik>();

            for (int i = 0; i < kury.Count; i += 1) //dodać/odjąć - podejścia
            {
                if (i + 1 >= kury.Count)
                {
                    Console.WriteLine($"{kury[i].Nazwa} Chyba nie ma kury?, niestety kolejna runda. -_- \n");
                    zwyciezcy.Add(kury[i]);
                    continue;
                }

                Kurnik k1 = kury[i];
                Kurnik k2 = kury[i + 1];

                int statystyka = rand.Next(3);
                string nazwaStatystyki = statystyka == 0 ? "Siła" : statystyka == 1 ? "Zręczność" : "IQ";

                // k - skrót od słowa: "kura"
                int wartoscK1 = statystyka == 0 ? k1.Sila : statystyka == 1 ? k1.Zrecznosc : k1.IQ;
                int wartoscK2 = statystyka == 0 ? k2.Sila : statystyka == 1 ? k2.Zrecznosc : k2.IQ;

                Console.WriteLine($"Pojedynek: {k1.Nazwa} vs {k2.Nazwa}");
                Console.WriteLine($"Wylosowany boost - atrybut: {nazwaStatystyki}");
                Console.WriteLine($"{k1.Nazwa}: {wartoscK1} vs {k2.Nazwa}: {wartoscK2}");

                if (wartoscK1 > wartoscK2)
                {
                    Console.WriteLine($"Zwycięzca: {k1.Nazwa}!\n");
                    zwyciezcy.Add(k1);
                }
                else if (wartoscK2 > wartoscK1)
                {
                    Console.WriteLine($"Zwycięzca: {k2.Nazwa}!\n");
                    zwyciezcy.Add(k2);
                }
                else
                {
                    Console.WriteLine("Remis! Obaj odpadają!\n");
                }
            }

            kury = zwyciezcy;
            runda++;
        }

        if (kury.Count == 1)
        {
            Console.WriteLine($"🏆 Zwycięzca turnieju to: {kury[0].Nazwa}!!! ");
        }
        else
        {
            Console.WriteLine("Brak Kury na polu bitwy, Kury ponownie są razem - 'ile remisów'? .");
        }

        Console.WriteLine("\n|-+-<] KONIEC TURNIEJU [>-+-|");
        Console.ReadLine();
    }

    static void TasujListe(List<Kurnik> lista)
    {
        for (int i = 0; i < lista.Count; i++)
        {
            int losowanie = rand.Next(lista.Count);
            Kurnik tak = lista[i];
            lista[i] = lista[losowanie];
            lista[losowanie] = tak;
        }
    }
}
