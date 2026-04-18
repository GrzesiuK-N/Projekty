using System;
using System.IO;
using System.Linq;
using System.Text;
using System.Collections.Generic;
using System.Reflection.Metadata.Ecma335;
using System.Runtime.CompilerServices;

class Pokemon
{
    public int Id { get; set; }
    public string Nazwa { get; set; }
    public string Skill1 { get; set; }

    public string Skill2 { get; set; }

    public Pokemon(int id, string nazwa, string skill1, string skill2)
    {
        Id = id;
        Nazwa = nazwa;
        Skill1 = skill1;
        Skill2 = skill2;
    }

    public override string ToString()
    {
        return $"nr z pokedexu: {Id}, {Nazwa} (nazwa, skillone: {Skill1}, skilltwo: {Skill2})";
    }

    enum Rodzaj
    {
        Normalny,
        Walczacy,
        Latający,
        Trujacy,
        Ziemny,
        Kamienny,
        Robaczy,
        Duchowy,
        Stalowy,
        Gwiezdny,
        Ognisty,
        Wodny,
        Trawiasty,
        Elektryczny,
        Psychiczny,
        Lodowy,
        Smoczy,
        Mroczny,
        Basniowy,
        ___
    }

    static void Main(string[] args)
    {
        Rodzaj myVar = Rodzaj.Walczacy;
        switch (myVar)
        {
            case Rodzaj.Normalny:
                Console.WriteLine("Normalny rodzaj");
                break;
            case Rodzaj.Walczacy:
                Console.WriteLine("Walczacy rodzaj");
                break;
            case Rodzaj.Latający:
                Console.WriteLine("Latający rodzaj");
                break;
            case Rodzaj.Trujacy:
                Console.WriteLine("Trujacy rodzaj");
                break;
            case Rodzaj.Ziemny:
                Console.WriteLine("Ziemny rodzaj");
                break;
            case Rodzaj.Kamienny:
                Console.WriteLine("Kamienny rodzaj");
                break;
            case Rodzaj.Robaczy:
                Console.WriteLine("Robaczy rodzaj");
                break;
            case Rodzaj.Duchowy:
                Console.WriteLine("Duchowy rodzaj");
                break;
            case Rodzaj.Stalowy:
                Console.WriteLine("Stalowy rodzaj");
                break;
            case Rodzaj.Gwiezdny:
                Console.WriteLine("Gwiezdny rodzaj");
                break;
            case Rodzaj.Ognisty:
                Console.WriteLine("Ognisty rodzaj");
                break;
            case Rodzaj.Wodny:
                Console.WriteLine("Wodny rodzaj");
                break;
            case Rodzaj.Trawiasty:
                Console.WriteLine("Trawiasty rodzaj");
                break;
            case Rodzaj.Elektryczny:
                Console.WriteLine("Elektryczny rodzaj");
                break;
            case Rodzaj.Psychiczny:
                Console.WriteLine("Psychiczny rodzaj");
                break;
            case Rodzaj.Lodowy:
                Console.WriteLine("Lodowy rodzaj");
                break;
            case Rodzaj.Smoczy:
                Console.WriteLine("Smoczy rodzaj");
                break;
            case Rodzaj.Mroczny:
                Console.WriteLine("Mroczny rodzaj");
                break;
            case Rodzaj.Basniowy:
                Console.WriteLine("Basniowy rodzaj");
                break;
            case Rodzaj.___:
                Console.WriteLine("___ rodzaj");
                break;
        }
    }

    class Program
    {
        static void Main()
        {
            List<Pokemon> kury = new List<Pokemon>
            {
            new Pokemon(1, "ulbasaur", skill1: "", skill2: ""),
            new Pokemon(1, "ulbasaur", skill1: "", skill2: ""),
            };


        }
    }

}

return 0;