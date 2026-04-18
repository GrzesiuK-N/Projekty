ConsoleKeyInfo keyInfo;
double suma = 0;
do
{
    Console.Clear();
    Console.WriteLine("Witaj w naszej restauracji");
    Console.WriteLine("co chcesz zamówić");
    Console.WriteLine("1.Pizza\n2. Spagethii\n3.Truskawki ");
    Console.WriteLine("naciśnij ESC żeby zakończyć ");
    int choice = Convert.ToInt32(Console.ReadLine());
    switch (choice)
    {
        case 1:
            Console.WriteLine("Pizza kupiona");
            suma += 15;
            break;

        case 2:
            Console.WriteLine("Spagethii kupione");
            suma += 16;
            break;

        case 3:
            Console.WriteLine("Truskawki kupione");
            suma += 20;
            break;

        default:
            break;
    }
    Console.WriteLine("Na rachunku masz kwotę do zapłaty" + suma);
    Console.WriteLine("Aby zakończyć kliknij ESC, aby kontynuować naciśnij dowolny");
    keyInfo = Console.ReadKey(true);
} while (keyInfo.Key != ConsoleKey.Escape);