using System;

class Program
{
    static void Main()
    {
        string[] uczniowie = { "Aleks", "Marysia", "Patryk", "Wiktor", "Tymek" };

        Random random = new Random();
        int indeks = random.Next(uczniowie.Length);
        string wybrany = uczniowie[indeks];

        Console.WriteLine($"Do odpowiedzi wywołany zostaje: {wybrany}");
        Console.WriteLine("Zadamy Ci 3 pytania. Powodzenia! lub nie!\n");

        int punkty = 0;

        for (int i = 1; i <= 3; i++)
        {
            Console.Write($"Pytanie {i}: ");
            
            switch (i)
            {
                case 1:
                    Console.WriteLine("Ile to jest 5 * 5? lub 5 * 5?");
                    string odp1 = Console.ReadLine();
                    if (odp1 == "25") punkty++;
                    break;

                case 2:
                    Console.WriteLine("Jaki jest symbol chemiczny wody?");
                    string odp2 = Console.ReadLine().ToUpper();
                    if (odp2 == "H2O") punkty++;
                    break;

                case 3:
                    Console.WriteLine("W którym roku wybuchła II Wojna Światowa?");
                    string odp3 = Console.ReadLine();
                    if (odp3 == "1939") punkty++;
                    break;
            }
        }

        Console.WriteLine($"\n[>-_+<] Uczeń {wybrany} zdobył {punkty} pkt.[>+_-<]");

        string ocena;
        switch (punkty)
        {
            case 3:
                ocena = "Bardzo dobry (5)";
                break;
            case 2:
                ocena = "Dostateczny (3)";
                break;
            case 1:
                ocena = "Dopuszczający (2)";
                break;
            default:
                ocena = "Niedostateczny (1)";
                break;
        }

        Console.WriteLine($"Twoja ocena końcowa lub ostateczna to: {ocena}");
    }
}