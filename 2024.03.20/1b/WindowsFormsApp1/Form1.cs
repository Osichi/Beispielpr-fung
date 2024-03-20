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
using static System.Windows.Forms.LinkLabel;

namespace WindowsFormsApp1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();

            List<Pizza> food_list = new List<Pizza>();
            string[] lines = File.ReadAllLines("pizza.txt");
            foreach (var item in lines)
            {
                string[] values = item.Split(',');
                Pizza pizza_object = new Pizza(values[0], values[1], values[2], values[3], values[4], values[5]);
                food_list.Add(pizza_object);
            }

            Dictionary<string, int> osszegPerSzemely = new Dictionary<string, int>();

            foreach (var item in lines)
            {
                string[] values = item.Split(',');
                int ar = int.Parse(values[3]);
                int db = int.Parse(values[5]);
                int osszeg = ar * db;
                bool kedvezmeny = values[4].ToLower() == "igen";
                string nev = values[1];

                if (osszegPerSzemely.ContainsKey(nev))
                {
                    osszegPerSzemely[nev] += kedvezmeny ? (int)(osszeg * 0.8) : osszeg;
                }
                else
                {
                    osszegPerSzemely.Add(nev, kedvezmeny ? (int)(osszeg * 0.8) : osszeg);
                }
            }

            var rendezettList = osszegPerSzemely.ToList();
            rendezettList.Sort((pair1, pair2) => pair2.Value.CompareTo(pair1.Value));

            foreach (var pair in rendezettList)
            {
                dataGridView1.Rows.Add(pair.Key, pair.Value);
            }

            string legkevesebbetKoltoSzemely = "";
            int legkevesebbetKoltottOsszeg = 999999999;

            foreach (var pair in osszegPerSzemely)
            {
                if (pair.Value < legkevesebbetKoltottOsszeg)
                {
                    legkevesebbetKoltoSzemely = pair.Key;
                    legkevesebbetKoltottOsszeg = pair.Value;
                }
            }

            label1.Text = String.Format($"{legkevesebbetKoltoSzemely} {legkevesebbetKoltottOsszeg} Ft");


            Dictionary<string, int> szemelyElfordulasok = new Dictionary<string, int>();

            foreach (var item in lines)
            {
                string[] values = item.Split(',');
                string nev = values[1];

                if (szemelyElfordulasok.ContainsKey(nev))
                {
                    szemelyElfordulasok[nev]++;
                }
                else
                {
                    szemelyElfordulasok.Add(nev, 1);
                }
            }

            List<string> kettoSzereploNevek = szemelyElfordulasok.Where(pair => pair.Value == 3).Select(pair => pair.Key).ToList();

            foreach (var item in kettoSzereploNevek)
            {
                label2.Text = String.Format($"{item}");
            }

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
