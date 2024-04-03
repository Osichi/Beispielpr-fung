using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //1, 2
            Console.WriteLine("1 és 2 feladat");
            List<Game> games = new List<Game>();
            string[] sorok = File.ReadAllLines("jatekok.txt");
            foreach (string s in sorok)
            {
                string[] values = s.Split(',');
                Game games1 = new Game(values[0], values[1], values[2], values[3], values[4]);
                games.Add(games1);
            }

            //3
            Console.WriteLine("3.feladat");
            foreach (var item in games) {
                Console.WriteLine($"{item.id} {item.category} {item.title} {item.price} {item.quantity}");
            }

            //4
            Console.WriteLine("4.feladat");
            int db = 0;
            foreach(var item in games)
            {
                db += item.quantity;
            }

            Console.WriteLine($"Az össz darabszám: {db} db");

            //5
            Console.WriteLine("5.feladat");
            foreach (var item in games)
            {
                if (item.category == "Akció")
                {
                    Console.WriteLine($"A Akció kategóriában lévő játékok címe és ára: {item.category}, {item.title} {item.price}");
                }
            }


            //6
            Console.WriteLine("6.feladat");
            Dictionary<string, int> keyValuePairs = new Dictionary<string, int>();

            foreach (var item in games)
            {
                if (keyValuePairs.ContainsKey(item.category))
                {
                    keyValuePairs[item.category]++;
                }
                else
                {
                    keyValuePairs[item.category] = 1;
                }
            }
            Console.WriteLine("Kategóriák és termékek száma: ");
            foreach (var item in keyValuePairs)
            {
                Console.WriteLine($"{item.Key}: {item.Value} termékek");
            }

            //7
            Console.WriteLine("7.feladat");

            List<Game> legolcsobbak = new List<Game>();
            Game legolcsobb = games[0];
            legolcsobbak.Add(legolcsobb);
            foreach (var item in games)
            {
                if (item.price < legolcsobb.price)
                {
                    legolcsobb = item;
                    legolcsobbak.Clear();
                    legolcsobbak.Add(legolcsobb);
                }
                else if (item.price == legolcsobb.price)
                {
                    legolcsobbak.Add(item);
                }
            }

            Console.WriteLine("\nLegolcsóbb termek(ek) adatai:");
            foreach (var legolcsobbTermek in legolcsobbak)
            {
                Console.WriteLine($"Kategória: {legolcsobbTermek.category}, {legolcsobbTermek.title}, Ár: {legolcsobbTermek.price}");
            }


            Console.ReadKey();
        }
    }
}
