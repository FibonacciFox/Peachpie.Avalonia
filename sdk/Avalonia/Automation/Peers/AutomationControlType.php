<?php
namespace Avalonia\Automation\Peers;
/**
 */
enum AutomationControlType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Button = 1;
	case Calendar = 2;
	case CheckBox = 3;
	case ComboBox = 4;
	case ComboBoxItem = 5;
	case Edit = 6;
	case Hyperlink = 7;
	case Image = 8;
	case ListItem = 9;
	case List = 10;
	case Menu = 11;
	case MenuBar = 12;
	case MenuItem = 13;
	case ProgressBar = 14;
	case RadioButton = 15;
	case ScrollBar = 16;
	case Slider = 17;
	case Spinner = 18;
	case StatusBar = 19;
	case Tab = 20;
	case TabItem = 21;
	case Text = 22;
	case ToolBar = 23;
	case ToolTip = 24;
	case Tree = 25;
	case TreeItem = 26;
	case Custom = 27;
	case Group = 28;
	case Thumb = 29;
	case DataGrid = 30;
	case DataItem = 31;
	case Document = 32;
	case SplitButton = 33;
	case Window = 34;
	case Pane = 35;
	case Header = 36;
	case HeaderItem = 37;
	case Table = 38;
	case TitleBar = 39;
	case Separator = 40;
}
