using System;
using System.Windows;

namespace Sklep_Koszulex
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public static double suma = 0;
        int towar1 = 1;
        double koszulka1 = 129.99;
        int towar2 = 2;
        double koszulka2 = 99.99;

        public MainWindow()
        {
            InitializeComponent();
            ZmienRazem();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {
            CustomMsg msg = new CustomMsg("Dziękujemy za zakupy produktów ale pamiętaj na drugi raz będzie 5% drożej. No chyba że zapomnimy jakiegoś naszego klienta wstedy może się komuś upiecze");
            msg.ShowDialog();
        }

        public void ZmienRazem()
        {
            Razem.Text = Math.Round(suma, 2).ToString() + " zł";
        }

        public void DodajTowar1(object sender, RoutedEventArgs e)
        {
            towar1++;
            Towar1.Text = Convert.ToString(towar1);

            double res = towar1 * koszulka1;
            res = Math.Round(res, 2);

            Cena1.Text = res + " zł";

            suma += koszulka1;
            ZmienRazem();


        }

        public void OdejmijTowar1(object sender, RoutedEventArgs e)
        {
            if (towar1 > 0)
            {
                towar1--;
                suma -= koszulka1;
            }

            Towar1.Text = Convert.ToString(towar1);

            double res = towar1 * koszulka1;
            res = Math.Round(res, 2);

            Cena1.Text = res + " zł";

            ZmienRazem();


        }
        public void DodajTowar2(object sender, RoutedEventArgs e)
        {
            towar2++;
            Towar2.Text = Convert.ToString(towar2);

            double res = towar2 * koszulka2;
            res = Math.Round(res, 2);

            Cena2.Text = res + " zł";

            suma += koszulka2;
            ZmienRazem();


        }
        public void OdejmijTowar2(object sender, RoutedEventArgs e)
        {
            towar2--;
            Towar2.Text = Convert.ToString(towar2);

            double res = towar2 * koszulka2;
            res = Math.Round(res, 2);

            Cena2.Text = res + " zł";

            suma -= koszulka2;
            ZmienRazem();


        }
    }
}