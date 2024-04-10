using System;
using System.IO;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Security.Cryptography;

namespace _1.Feladat
{
    internal class Program
    {
        static void Main(string[] args)
        {
            //4
            Console.WriteLine("4. feladat");
            List<Fest> fests = new List<Fest>();
            string[] sorok = File.ReadAllLines("fesztival.txt");
            foreach (string s in sorok)
            {
                string[] values = s.Split(',');
                Fest fest1 = new Fest(values[0], values[1], values[2], values[3], values[4], values[5], values[6]);
                fests.Add(fest1);
            }

            foreach (var a in fests)
            {
                Console.WriteLine($"{a.sorszam};{a.nev};{a.fesztival};{a.napok};{a.jegyek};{a.ar};{a.kedvezmeny}");
            }

            //5,6
            Console.WriteLine("5. és 6. feladat");

            Dictionary<string, double> keyValuePairs = new Dictionary<string, double>();

            foreach (var item in fests)
            {
                if (keyValuePairs.ContainsKey(item.nev)) {
                    if (item.kedvezmeny == "igen")
                    {
                        keyValuePairs[item.nev]+= item.ar * item.napok * item.jegyek * 0.75;
                    }
                    else
                    {

                        keyValuePairs[item.nev] += item.ar * item.napok * item.jegyek;
                    }
                }
                else
                {
                    if (item.kedvezmeny == "igen")
                    {
                        keyValuePairs.Add(item.nev, item.ar * item.napok * item.jegyek * 0.75);
                    }
                    else
                    {

                        keyValuePairs.Add(item.nev, item.ar * item.napok * item.jegyek);
                    }
                }

            }

            keyValuePairs = keyValuePairs.OrderBy(kv => kv.Value).ToDictionary(kv => kv.Key, kv => kv.Value);


            foreach (var item in keyValuePairs)
            {
                Console.WriteLine($"{item.Key}: {item.Value} Ft");
            }

            //7
            Console.WriteLine("7. feladat");

            Console.WriteLine($"A legtöbbet költő személy: {keyValuePairs.Keys.Last()}, összeg: {keyValuePairs.Values.Last()} Ft ");

            //8
            Console.WriteLine("8. feladat");

            Dictionary<string, int> db = new Dictionary<string, int>();

            foreach (var item in fests)
            {
                if (db.ContainsKey(item.nev))
                {
                    db[item.nev]++;
                }
                else
                {
                    db[item.nev] = 1;
                }
            }
            foreach (var item in db)
            {
                if (item.Value == 2)
                {
                    Console.WriteLine("Azoknak a személy/személyeknek a neve akik 2X foglaltak szállást:");
                    Console.WriteLine(item.Key);
                }
            }
            Console.ReadKey();
        }
    }
}
