using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Runtime.CompilerServices;
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

namespace lista
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void ListBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {

        }
        public ObservableCollection<ListItem> Items { get; set; }
        private decimal _grandTotal;
        public decimal GrandTotal
        {
            get => _grandTotal;
            set { _grandTotal = value; OnPropertyChanged(); }
        }

        public Listopen()
        {
            Items = new ObservableCollection<ListItem>
            {
                new ListItem() { Name = "serowa zapiekanka", listbox = 1 },
                new ListItem() { Name = "Ciasto czekoladowe", listbox = 2 },
                new ListItem() { Name = "Lodowy arbuz", listbox = 3 }
            };
        }

        public void CalculateGrandTotal()
        {
            GrandTotal = Items.Sum(static i =>
        {
            return i.TotalSumList;
        });
        }

        public event PropertyChangedEventHandler PropertyChanged;
        protected void OnPropertyChanged([CallerMemberName] string name = null) =>
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
    }
}
}