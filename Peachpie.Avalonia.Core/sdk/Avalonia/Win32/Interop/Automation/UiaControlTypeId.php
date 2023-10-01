<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum UiaControlTypeId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Button = 50000;
	case Calendar = 50001;
	case CheckBox = 50002;
	case ComboBox = 50003;
	case Edit = 50004;
	case Hyperlink = 50005;
	case Image = 50006;
	case ListItem = 50007;
	case List = 50008;
	case Menu = 50009;
	case MenuBar = 50010;
	case MenuItem = 50011;
	case ProgressBar = 50012;
	case RadioButton = 50013;
	case ScrollBar = 50014;
	case Slider = 50015;
	case Spinner = 50016;
	case StatusBar = 50017;
	case Tab = 50018;
	case TabItem = 50019;
	case Text = 50020;
	case ToolBar = 50021;
	case ToolTip = 50022;
	case Tree = 50023;
	case TreeItem = 50024;
	case Custom = 50025;
	case Group = 50026;
	case Thumb = 50027;
	case DataGrid = 50028;
	case DataItem = 50029;
	case Document = 50030;
	case SplitButton = 50031;
	case Window = 50032;
	case Pane = 50033;
	case Header = 50034;
	case HeaderItem = 50035;
	case Table = 50036;
	case TitleBar = 50037;
	case Separator = 50038;
	case SemanticZoom = 50039;
	case AppBar = 50040;
}
