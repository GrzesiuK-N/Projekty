using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace koszulex
{
    /// <summary>
    /// Logika interakcji dla klasy CustomMsg.xaml
    /// </summary>
    public partial class CustomMsg : Window
    {
        public CustomMsg(string message)
        {
            InitializeComponent();
            klikac.Text = message;
        }

        public bool Result { get; private set; }

        private void Ok_Click(object sender, RoutedEventArgs e)
        {
            Result = true;
            Close();
        }



        public static void Show(string message, Window owner)
        {
            CustomMsg box = new CustomMsg(message);
            box.Owner = owner;
            box.ShowDialog();
        }
    }
}