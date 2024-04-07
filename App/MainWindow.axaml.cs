using System;
using Avalonia.Controls;
using Avalonia.Input;
using Avalonia.Interactivity;

namespace App;

public partial class MainWindow : Window
{
    public MainWindow()
    {
        InitializeComponent();
        var s = new Func<object, object, object>((sender, e) =>
        {
            Console.WriteLine(e);
            return 0;
        });
       
        Button1.AddHandler(PointerEnteredEvent, s);
        //Button1.RemoveHandler(PointerEnteredEvent, s);
        
    }


    private void Button1_OnClick(object? sender, RoutedEventArgs e)
    {
        throw new NotImplementedException();
    }
    
}