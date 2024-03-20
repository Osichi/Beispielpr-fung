using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    internal class Pizza
    {
        public int sorszam;
        public string vendegNev;
        public string pizzaNev;
        public double ar;
        public string kedvezmeny;
        public int darab;

        public Pizza(string sorszam, string vendegNev, string pizzaNev, string ar, string kedvezmeny, string darab)
        {
            this.sorszam = int.Parse(sorszam);
            this.vendegNev = vendegNev;
            this.pizzaNev = pizzaNev;
            this.ar = double.Parse(ar);
            this.kedvezmeny = kedvezmeny;
            this.darab = int.Parse(darab);
        }
    }
}
