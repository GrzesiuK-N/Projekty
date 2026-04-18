/* 
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;

namespace koszulex
{
   public MainWindow()
   {
       InitializeComponent();
       MainFrame.Navigate(new Uri("MainWindow.xaml", UriKind.Relative));
   }
   private void przycisk_noKlik(object sender, RoutedEventArgs e)
   {
       MessageBox.Show("zrobione");

       this.NavigationService.Navigate(new Uri("CustomMsg.xaml", UriKind.Relative));
   }
}
*/