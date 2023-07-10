using Avalonia.Markup.Xaml;
using Peachpie.Avalonia.Controls.Windows;

namespace AvaloniaApplication;

public partial class MainWindow : UxWindow
{
    public MainWindow()
    {
        InitializeComponent();
    }

    private void InitializeComponent()
    {
        AvaloniaXamlLoader.Load(this);
    }
}