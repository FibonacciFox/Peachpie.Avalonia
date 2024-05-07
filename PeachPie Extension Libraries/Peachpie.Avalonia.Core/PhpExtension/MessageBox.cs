using Avalonia;
using Avalonia.Controls;
using MsBox.Avalonia;
using MsBox.Avalonia.Enums;
using Pchp.Core;

[assembly: PhpExtension]


namespace Peachpie.Avalonia.Core.PhpExtension;

public static class MessageBox
{
    public static async void Alert([ImportValue(ImportValueAttribute.ValueSpec.This)] Window owner,  PhpValue value)
    {
        var box = MessageBoxManager.GetMessageBoxStandard("Alert", value.String, ButtonEnum.Ok, Icon.Warning, WindowStartupLocation.CenterOwner);
        var textBlock = new TextBlock();
        var text = textBlock.GetObservable(TextBlock.TextProperty);
        await box.ShowWindowDialogAsync(owner);
    }
}