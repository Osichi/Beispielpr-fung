using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace ConsoleApp1
{
    internal class Program
    {
        static void Main(string[] args)
        {

            List<Books> books = new List<Books>();
            string[] sorok = File.ReadAllLines("books.txt");
            foreach (string s in sorok)
            {
                string[] values = s.Split(',');
                Books books1 = new Books(values[0], values[1], values[2], values[3], values[4]);
                books.Add(books1);
            }

            Console.WriteLine("4. feladat");
            foreach (var book in books)
            {
                Console.WriteLine($"{book.sorszam} {book.mufaj} {book.cim} {book.ar} {book.darab}");
            }

            Console.WriteLine("5. feladat");
            int bookDarab = 0;
            foreach (var book in books)
            {
                bookDarab += book.darab;
            }

            Console.WriteLine($"Az össz darabszám: {bookDarab}");

            Console.WriteLine("6. feladat");

            foreach(var book in books)
            {
                if (book.mufaj == "Regény")
                {
                    Console.WriteLine($"Regény kategóriába tartozó könyv címe és ára: {book.mufaj} {book.cim} {book.ar}");
                }
            }

            Console.WriteLine("7. feladat");

            Dictionary<string, int> keyValuePairs = new Dictionary<string, int>();

            foreach (var book in books)
            {
                if (keyValuePairs.ContainsKey(book.mufaj))
                {
                    keyValuePairs[book.mufaj]++;
                }
                else
                {
                    keyValuePairs[book.mufaj] = 1;
                }
            }
                Console.WriteLine("Kategóriák és termékek száma: ");
                foreach (var item in keyValuePairs)
                {
                    Console.WriteLine($"{item.Key} {item.Value}");
                }


            Console.WriteLine("8. feladat");
            List<Books> legolcsobbak = new List<Books>();
            Books legolcsobb = books[0];
            legolcsobbak.Add( legolcsobb );
            foreach (var book in books)
            {
                if (book.ar < legolcsobb.ar)
                {
                    legolcsobb = book;
                    legolcsobbak.Clear();
                    legolcsobbak.Add(legolcsobb);
                }
                else if (book.ar == legolcsobb.ar)
                {
                    legolcsobbak.Add(book);
                }
            }

            Console.WriteLine("\nLegolcsóbb termek(ek) adatai:");
            foreach (var legolcsobbTermek in legolcsobbak)
            {
                Console.WriteLine($"Kategória: {legolcsobbTermek.mufaj}, {legolcsobbTermek.cim}, Ár: {legolcsobbTermek.ar}");
            }


            Console.ReadKey();
        }
    }
}
