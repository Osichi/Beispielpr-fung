using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace _1.Feladat
{
    internal class Fest
    {
        public int sorszam;
        public string nev;
        public string fesztival;
        public int napok;
        public int jegyek;
        public int ar;
        public string kedvezmeny;
        public Fest(string sorszam, string nev, string fesztival, string napok, string jegyek, string ar, string kedvezmeny) {
            this.sorszam = int.Parse(sorszam);
            this.nev = nev;
            this.fesztival = fesztival;
            this.napok = int.Parse(napok);
            this.jegyek = int.Parse(jegyek);
            this.ar = int.Parse(ar);
            this.kedvezmeny = kedvezmeny;
        }
    }
}
