using System;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Windows;
using System.Windows.Input;

namespace App1
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            this.DataContext = new MeatShopViewModel();
        }
    }

    public class MeatItem : INotifyPropertyChanged
    {
        private int _quantity = 0;
        public string Name { get; set; }
        public string ImagePath { get; set; }
        public decimal PricePerKg { get; set; }
        public MeatShopViewModel Parent { get; set; }

        public int Quantity
        {
            get => _quantity;
            set {
                if (value >= 0) {
                    _quantity = value;
                    OnPropertyChanged();
                    OnPropertyChanged(nameof(TotalPriceForMeat));
                    Parent?.CalculateGrandTotal();
                }
            }
        }

        public decimal TotalPriceForMeat => Quantity * PricePerKg;

        public ICommand AddCommand { get; }
        public ICommand RemoveCommand { get; }

        public MeatItem(MeatShopViewModel parent)
        {
            Parent = parent;
            AddCommand = new SimpleCommand(() => Quantity++);
            RemoveCommand = new SimpleCommand(() => { if (Quantity > 0) Quantity--; });
        }

        public event PropertyChangedEventHandler PropertyChanged;
        protected void OnPropertyChanged([CallerMemberName] string name = null) =>
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
    }

    public class MeatShopViewModel : INotifyPropertyChanged
    {
        public ObservableCollection<MeatItem> Items { get; set; }
        private decimal _grandTotal;
        public decimal GrandTotal
        {
            get => _grandTotal;
            set { _grandTotal = value; OnPropertyChanged(); }
        }

        public MeatShopViewModel()
        {
            Items = new ObservableCollection<MeatItem>
            {
                new MeatItem(this) { Name = "Wagyu", PricePerKg = 3000m, ImagePath = "Wagyu.jpg" },
                new MeatItem(this) { Name = "Polędwiczki Wieprzowe", PricePerKg = 555m, ImagePath = "poledwiczka_wieprzowa_w_sosie.jpg" },
                new MeatItem(this) { Name = "Mortadela", PricePerKg = 457m, ImagePath = "Mortadela.jpg" }
            };
        }

        public void CalculateGrandTotal() => GrandTotal = Items.Sum(i => i.TotalPriceForMeat);

        public event PropertyChangedEventHandler PropertyChanged;
        protected void OnPropertyChanged([CallerMemberName] string name = null) =>
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
    }

    public class SimpleCommand : ICommand
    {
        private readonly Action _execute;
        public SimpleCommand(Action execute) => _execute = execute;
        public bool CanExecute(object parameter) => true;
        public void Execute(object parameter) => _execute();
        public event EventHandler CanExecuteChanged;
    }
}