using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace zwykle
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();

        }
        public void przycisk(object sender, RoutedEventArgs e)
        {
            int liczba1 = Convert.ToInt32(form1.text);
            int liczba2 = Convert.ToInt32(form2.text);
            int liczba3 = Convert.ToInt32(form3.text);
            int wynik = (liczba1 * liczba2) + (liczba2 * liczba2);
            if ((liczba1 * liczba2) + (liczba2 * liczba2) == (liczba3 * liczba3))
            {
                Res.text = "Tak jest to poprawne" +
            }
            int wynik = liczba1 * liczba2;

            Res.text = wynik.ToString();
        }
    }
}