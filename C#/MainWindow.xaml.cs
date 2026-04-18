using System;
using System.ComponentModel;
using System.Runtime.CompilerServices;
using System.Windows;
using System.Windows.Input;

namespace KalkulatorPodatkowy
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            this.DataContext = new TaxViewModel();
        }
    }

    public class TaxViewModel : INotifyPropertyChanged
    {
        private decimal _grossAmount = 9000; 

        public decimal GrossAmount
        {
            get => _grossAmount;
            set
            {
                _grossAmount = value;
                OnPropertyChanged();
                CalculateTaxes();
            }
        }

        private decimal _zus; public decimal ZUS { get => _zus; set { _zus = value; OnPropertyChanged(); } }
        private decimal _zdrowotna; public decimal Zdrowotna { get => _zdrowotna; set { _zdrowotna = value; OnPropertyChanged(); } }
        private decimal _pit; public decimal PIT { get => _pit; set { _pit = value; OnPropertyChanged(); } }
        private decimal _netAmount; public decimal NetAmount { get => _netAmount; set { _netAmount = value; OnPropertyChanged(); } }

        public TaxViewModel()
        {
            CalculateTaxes();
        }

        private void CalculateTaxes()
        {
            ZUS = Math.Round(GrossAmount * 0.1371m, 2);

            decimal podstawaZdrowotna = GrossAmount - ZUS;
            
            Zdrowotna = Math.Round(podstawaZdrowotna * 0.09m, 2);

            decimal podstawaOpodatkowania = Math.Round(GrossAmount - ZUS - 250, 0); 
            decimal podatekRaw = (podstawaOpodatkowania * 0.12m) - 300; 
            PIT = Math.Max(0, Math.Round(podatekRaw, 0));

            NetAmount = GrossAmount - ZUS - Zdrowotna - PIT;
        }

        public event PropertyChangedEventHandler PropertyChanged;
        protected void OnPropertyChanged([CallerMemberName] string name = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(name));
        }
    }
}