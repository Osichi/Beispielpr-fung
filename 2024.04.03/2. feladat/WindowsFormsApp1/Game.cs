using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace WindowsFormsApp1
{
    internal class Game
    {
        public int id;
        public string category;
        public string title;
        public int price;
        public int quantity;

        public Game(string id, string category, string title, string price, string quantity)
        {
            this.id = int.Parse(id);
            this.category = category;
            this.title = title;
            this.price = int.Parse(price);
            this.quantity = int.Parse(quantity);
        }
    }
}
