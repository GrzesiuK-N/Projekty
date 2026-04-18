using System;

class LegoSet
{
    public string Name { get; set; }
    public int SetNumber { get; set; }
    public string Theme { get; set; }
    public int PieceCount { get; set; }
    public double Price { get; set; }

    public LegoSet(string name, int setNumber, string theme, int pieceCount, double price)
    {
        Name = name;
        SetNumber = setNumber;
        Theme = theme;
        PieceCount = pieceCount;
        Price = price;
    }

    public void DisplayInfo()
    {
        Console.WriteLine($"Nazwa: {Name}, Numer zestawu: {SetNumber}, Tematyka: {Theme}, Liczba elementów: {PieceCount}, Cena: {Price:C}");
    }
}

class Program
{
    static void Main(string[] args)
    {
        LegoSet set1 = new LegoSet("Millennium Falcon", 75257, "Star Wars", 1351, 159.99);
        LegoSet set2 = new LegoSet("Harry Potter Castle", 71043, "Harry Potter", 6020, 399.99);
        LegoSet set3 = new LegoSet("Technic Bugatti Chiron", 42083, "Technic", 3599, 349.99);
        LegoSet set4 = new LegoSet("LEGO Friends Treehouse", 41703, "Friends", 1114, 79.99);

        set1.DisplayInfo();
        set2.DisplayInfo();
        set3.DisplayInfo();
        set4.DisplayInfo();

        Console.WriteLine("Naciśnij dowolny klawisz, aby zakończyć...");
        Console.ReadKey();
    }
}
