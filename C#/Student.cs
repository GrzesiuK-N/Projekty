public class Student
{
    public int ID;

    public string Imie;
    public string Nazwisko;
    public double AvgWynik;

    public Student(int ID, string Imie, string Nazwisko, double AvgWynik)
    {
        this.ID = ID;
        this.Imie = Imie;
        this.Nazwisko = Nazwisko;
        this.AvgWynik = avg;
    }

    static void ShowStudent()
    {
        Console.WriteLine($"Student o ID: {this.ID} o imieniu: {this.Name} oraz nazwisku {this.Nazwisko} a także o wyniku {this.AvgWynik}");
    }
}