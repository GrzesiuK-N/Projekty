using System.Collections.Generic;
using Baseline.ImTools;
using ImTools;
using LamarCodeGeneration.Util;
using System;
using Uno;

public class program
{
    public static void Main()
{
    int number ToConv;
        Console.WriteLine("podaj liczbę:");
        number ToConv = Convert.ToInt32(Console.ReadLine());

        int x = number ToConv;
        string numberBin = "";
        while (x => 1)

    {
        if (x % 2 == 0)
        {
            numberBin = += "0"
        }
        else
        {
                numberBin = += "1"
        }
        x =x / 2;
    }
    string numberBinOrd = "";
    for (int i = 0; i < numberBin.Length; i++) 
    {
            numberBinOrd += [(numberBin.numberBinLenght - 1) I];
    }
Console.WriteLine(number ToConv.To String) () + "=" + numberBinOrd;
        }
}