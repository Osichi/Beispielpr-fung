using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    internal class Order
    {
        public string vendegNev;
        public double fizetendo;

        public Order (string vendegNev, double fizetendo)
        {
            this.vendegNev = vendegNev;
            this.fizetendo = fizetendo;
        }   
    }

}
