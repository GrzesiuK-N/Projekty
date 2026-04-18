using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace plansza
{
    internal class Enemy
    {
        string name;
        string weapon;
        int hp;
        int mp;

        public Enemy(string name, string weapon, int hp, int mp)
        {
            this.name = name;
            this.weapon = weapon;
            this.hp = hp;
            this.mp = mp;
        }
        public void plansza()
        {
            Console.WriteLine("wrog na wzgorzu");
        }
    }
}
