using System;

class Hero
{
    public string Name { get; set; }
    public string Class { get; set; }
    public int Level { get; set; }
    public int Strength { get; set; }
    public int Dexterity { get; set; }
    public int Intelligence { get; set; }
    public int Health { get; set; }
    public int Mana { get; set; }
    public string Weapon { get; set; }
    public string Armor { get; set; }

    public Hero(string name, string heroClass, int level, int strength, int dexterity, int intelligence, int health, int mana, string weapon, string armor)
    {
        Name = name;
        Class = heroClass;
        Level = level;
        Strength = strength;
        Dexterity = dexterity;
        Intelligence = intelligence;
        Health = health;
        Mana = mana;
        Weapon = weapon;
        Armor = armor;
    }

    public void DisplayInfo()
    {
        Console.WriteLine($"Name: {Name}, Class: {Class}, Level: {Level}, Strength: {Strength}, Dexterity: {Dexterity}, Intelligence: {Intelligence}, Health: {Health}, Mana: {Mana}, Weapon: {Weapon}, Armor: {Armor}");
    }
}

class Program
{
    static void Main(string[] args)
    {
        Hero hero1 = new Hero("Ludwik", "Paladin", 10, 15, 10, 12, 100, 50, "miecz", "platynowa zbroja");
        Hero hero2 = new Hero("Albert", "Mage", 12, 8, 12, 20, 80, 100, "kostur", "magiczny plaszcz");
        Hero hero3 = new Hero("Alfred", "Shaman", 11, 14, 10, 15, 90, 70, "mlot", "skurzane ubrania");
        Hero hero4 = new Hero("Gumball", "Rogue", 9, 12, 18, 10, 85, 40, "sztylety", "skurzana zbroja");
        Hero hero5 = new Hero("Darwin", "Druid", 13, 10, 10, 18, 95, 80, "rozdzka", "zwykle ubrania");

        hero1.DisplayInfo();
        hero2.DisplayInfo();
        hero3.DisplayInfo();
        hero4.DisplayInfo();
        hero5.DisplayInfo();
    }
}