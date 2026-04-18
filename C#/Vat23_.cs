using System;

class Program
{
    static void Main(string[] args)
    {
        Console.WriteLine("Wybierz opcję:");
        Console.WriteLine("1. Oblicz kwotę brutto (z VAT) na podstawie kwoty netto.");
        Console.WriteLine("2. Oblicz kwotę netto (bez VAT) na podstawie kwoty brutto.");
        Console.Write("Twój wybór: ");
        int choice = int.Parse(Console.ReadLine());

        const decimal VAT_RATE = 0.23m; 

        switch (choice)
        {
            case 1:
                Console.Write("Podaj kwotę netto: ");
                decimal netAmount = decimal.Parse(Console.ReadLine());
                decimal grossAmount = CalculateGross(netAmount, VAT_RATE);
                Console.WriteLine($"Kwota brutto: {grossAmount:F2} zł");
                break;

            case 2:
                Console.Write("Podaj kwotę brutto: ");
                decimal grossValue = decimal.Parse(Console.ReadLine());
                decimal netValue = CalculateNet(grossValue, VAT_RATE);
                Console.WriteLine($"Kwota netto: {netValue:F2} zł");
                break;

            default:
                Console.WriteLine("Nieprawidłowy wybór.");
                break;
        }

        Console.WriteLine("Naciśnij dowolny klawisz, aby zakończyć...");
        Console.ReadKey();
    }

    static decimal CalculateGross(decimal netAmount, decimal vatRate)
    {
        return netAmount * (1 + vatRate);
    }

    static decimal CalculateNet(decimal grossAmount, decimal vatRate)
    {
        return grossAmount / (1 + vatRate);
    }
}