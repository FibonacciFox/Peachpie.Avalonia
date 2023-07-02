using Avalonia.Controls;
using Peachpie.Avalonia.Controls.Layout;

namespace AvaloniaApplication;

public class UxRowDefinitions : RowDefinitions
{
    public UxRowDefinitions(string s) : base(s)
    {
        
    }
}

public partial class MainWindow : Window
{
    public MainWindow()
    {
        InitializeComponent();

        UxGrid grid = new UxGrid();
        grid.RowDefinitions = new UxRowDefinitions("100");
    }
}