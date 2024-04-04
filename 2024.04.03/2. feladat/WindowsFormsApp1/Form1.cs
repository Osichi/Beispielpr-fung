using System;
using System.IO;

using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            List<Game> games = new List<Game>();
            string[] strings = File.ReadAllLines("jatekok.txt");
            foreach (string s in strings)
            {
                string[] strings1 = s.Split(',');
                Game game = new Game(strings1[0], strings1[1], strings1[2], strings1[3], strings1[4]);
                games.Add(game);
            }

            int db =0;
            foreach (Game game in games)
            {
                db += game.quantity;
            }
            label1.Text = String.Format("Az össz darabszám: {0}", db );

            List<Game> legdragabbak = new List<Game>();
            Game legdragabb = games[0];
            legdragabbak.Add(legdragabb);

            foreach (var game in games)
            {
                if (game.price > legdragabb.price)
                {
                    legdragabb = game;
                    legdragabbak.Clear();
                    legdragabbak.Add(legdragabb);
                }
                else if (game.price == legdragabb.price)
                {
                    legdragabbak.Add(legdragabb);
                }
            }

            foreach (var legdragabbTermek in legdragabbak)
            {
                dataGridView1.Rows.Add(legdragabbTermek.category, legdragabbTermek.title, legdragabbTermek.price);
            }

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string valasztott = (string)comboBox1.SelectedItem;
            listBox1.Items.Clear();
            List<Game> games = new List<Game>();
            string[] strings = File.ReadAllLines("jatekok.txt");
            foreach (string s in strings)
            {
                string[] strings1 = s.Split(',');
                Game game = new Game(strings1[0], strings1[1], strings1[2], strings1[3], strings1[4]);
                games.Add(game);
            }
            foreach (var game in games)
            {
                if (game.category == valasztott)
                {
                    string text = "Cím: " + game.title + ", Ár: " + game.price + ", Darab: " + game.quantity;
                    listBox1.Items.Add(text);
                }
            }
        }
    }
}
