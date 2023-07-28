using System;
using Avalonia.Controls;
using Avalonia.Controls.Primitives;

namespace Peachpie.Avalonia.Extension;

public static class StyleKeyOverride
{
    //Layout controls
    public static readonly Type Border = typeof(Border);
    public static readonly Type Canvas = typeof(Canvas);
    public static readonly Type DockPanel = typeof(DockPanel);
    public static readonly Type Expander = typeof(Expander);
    public static readonly Type Grid = typeof(Grid);
    public static readonly Type DataGrid = typeof(DataGrid);
    public static readonly Type DataGridTextColumn = typeof(DataGridTextColumn);
    public static readonly Type GridSplitter = typeof(GridSplitter);
    public static readonly Type Panel = typeof(Panel);
    public static readonly Type RelativePanel = typeof(RelativePanel);
    public static readonly Type ScrollViewer = typeof(ScrollViewer);
    public static readonly Type SplitView = typeof(SplitView);
    public static readonly Type StackPanel = typeof(StackPanel);
    public static readonly Type TabControl = typeof(TabControl);
    public static readonly Type UniformGrid = typeof(UniformGrid);
    public static readonly Type WrapPanel = typeof(WrapPanel);
    
    //Buttons
    public static readonly Type Button = typeof(Button);
    public static readonly Type RepeatButton = typeof(RepeatButton);
    public static readonly Type RadioButton = typeof(RadioButton);
    public static readonly Type ToggleButton = typeof(ToggleButton);
    public static readonly Type ButtonSpinner = typeof(ButtonSpinner);
    public static readonly Type SplitButton = typeof(SplitButton);
    //Стиль ToggleSplitButton наследуется от SplitButton
    public static readonly Type ToggleSplitButton = typeof(SplitButton);
    
    //Repeating Data Controls
    //public static readonly Type DataGrid = typeof(DataGrid);
    public static readonly Type ItemsControl = typeof(ItemsControl);
    //public static readonly Type ItemsRepeater = typeof(ItemsRepeater);
    public static readonly Type ListBox = typeof(ListBox);
    public static readonly Type ComboBox = typeof(ComboBox);
    
    //Text display and editing
    public static readonly Type AutoCompleteBox = typeof(AutoCompleteBox);
    public static readonly Type TextBlock = typeof(TextBlock);
    public static readonly Type TextBox = typeof(TextBox);
    public static readonly Type MaskedTextBox = typeof(MaskedTextBox);
    
    //Value selection
    public static readonly Type CheckBox = typeof(CheckBox);
    public static readonly Type Slider = typeof(Slider);
    public static readonly Type Calendar = typeof(Calendar);
    public static readonly Type CalendarDatePicker = typeof(CalendarDatePicker);
    public static readonly Type DatePicker = typeof(DatePicker);
    public static readonly Type TimePicker = typeof(TimePicker);
    
    //Displaying images
    public static readonly Type Image = typeof(Image);
    public static readonly Type PathIcon = typeof(PathIcon);
    
    //Menus and Popups
    public static readonly Type Menu = typeof(Menu);
    public static readonly Type Flyout = typeof(Flyout);
    public static readonly Type ToolTip = typeof(ToolTip);
    
    //Windows
    public static readonly Type Window = typeof(Window);
    
}