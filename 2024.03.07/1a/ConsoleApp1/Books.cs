using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    internal class Books
    {
        public int sorszam;
        public string mufaj;
        public string cim;
        public int ar;
        public int darab;

        public Books(string sorszam, string mufaj, string cim, string ar, string darab) { 
            this.sorszam = int.Parse(sorszam);
            this.mufaj = mufaj;
            this.cim = cim;
            this.ar = int.Parse (ar);
            this.darab = int.Parse (darab);
        }  
    }
}
