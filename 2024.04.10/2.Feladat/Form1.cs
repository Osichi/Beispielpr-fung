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

namespace _2.Feladat
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            Console.WriteLine("4. feladat");
            List<Fest> fests = new List<Fest>();
            string[] sorok = File.ReadAllLines("fesztival.txt");
            foreach (string s in sorok)
            {
                string[] values = s.Split(',');
                Fest fest1 = new Fest(values[0], values[1], values[2], values[3], values[4], values[5], values[6]);
                fests.Add(fest1);
            }

            Dictionary<string, double> keyValuePairs = new Dictionary<string, double>();

            foreach (var item in fests)
            {
                if (keyValuePairs.ContainsKey(item.nev))
                {
                    if (item.kedvezmeny == "igen")
                    {
                        keyValuePairs[item.nev] += item.ar * item.napok * item.jegyek * 0.75;
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

            keyValuePairs = keyValuePairs.OrderByDescending(kv => kv.Value).ToDictionary(kv => kv.Key, kv => kv.Value);

            foreach (var kv in keyValuePairs)
            {
                dataGridView1.Rows.Add(kv.Key, kv.Value);
            }

            
                label1.Text = "A legkevesebbet költő személy: " + keyValuePairs.Keys.Last() + ", összeg: " + keyValuePairs.Values.Last() + " Ft";


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
                if (item.Value >= 3)
                {
                    string text = "A neve legalább háromszor szerepelt a listában:" + item.Key;
                    listBox1.Items.Add(text);
                }
                
            }

            
            
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }
    }
}
