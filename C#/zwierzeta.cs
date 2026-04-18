using System.Net.NetworkInformation;
using System.Security.Cryptography.X509Certificates;

namespace Chomik_Begalski
{
    public class zwierzeta
    {
        
        public static void Main(string[] args)
        { 
            Kwadrat pierwszy = new Kwadrat(15, 20);
            pierwszy.showKwadrat();

            trojkat drugi = new trojkat(100, 27);
            drugi.showtrojkat();


            Console.WriteLine("Okej");
        }

    }
}