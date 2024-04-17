using MsBox.Avalonia;
using MsBox.Avalonia.Enums;
using Pchp.Core;

[assembly: PhpExtension]


namespace Peachpie.Avalonia.Core.Extension;

public static class MessageBox
{
    public static async void Alert(PhpValue value)
    {
        var box = MessageBoxManager.GetMessageBoxStandard("Alert", value.String, ButtonEnum.Ok, Icon.Warning);
        
        await box.ShowAsync();
    }
}