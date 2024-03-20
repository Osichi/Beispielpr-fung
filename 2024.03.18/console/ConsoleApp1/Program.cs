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
            //1
            List<Pizza> list = new List<Pizza>();
            string[] strings = File.ReadAllLines("pizza.txt");
            foreach (string s in strings)
            {
                string[] strings1 = s.Split(',');
                Pizza pizza1 = new Pizza(strings1[0], strings1[1], strings1[2], strings1[3], strings1[4], strings1[5]);
                list.Add(pizza1);
            }

            //2
            Console.WriteLine("2. feladat");
            List<Order> order = new List<Order>();
            double fizetendo = 0;
            foreach(Pizza pizza in list)
            {//3
                fizetendo = pizza.ar * pizza.darab;
                if (pizza.kedvezmeny =="igen")
                {
                    fizetendo = fizetendo * 0.8;
                }

                

                Order order1 = new Order(pizza.vendegNev, fizetendo);
                order.Add(order1);
                


            }
            List<Order> ascending = new List<Order>();
            List<Order> calami = new List<Order>();
            Order start = order[0];
            foreach (var item in order)
            {
                if (item.fizetendo < start.fizetendo)
                {
                    start = item;
                    calami.Clear();
                    calami.Add(start);
                    order.Remove(item);

                }else if (item.fizetendo == start.fizetendo)
                {
                    calami.Add(item);

                    order.Remove(item);
                }
            }

            foreach (var item in calami)
            {
                Console.WriteLine(item.fizetendo);
            }
            



            Console.ReadKey();
        }
    }
}
