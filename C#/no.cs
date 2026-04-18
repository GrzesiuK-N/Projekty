using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

Int64 x;
try
{
    StreamWriter sw = new StreamWriter("C:\\Users\\technik\\Desktop\\hist.txt", true, Encoding.ASCII);
    for (x = 0; x < 20; x++)
        Console.WriteLine(" ");
    {
        sw.Write(x);
    }

    sw.Close();
}
catch (Exception e)
{
    Console.WriteLine("Exception: " + e.Message);
}
finally
{
    Console.WriteLine("Executing finally block.");
}