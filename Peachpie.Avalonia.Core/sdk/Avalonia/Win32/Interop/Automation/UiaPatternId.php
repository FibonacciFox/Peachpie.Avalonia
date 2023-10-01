<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum UiaPatternId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invoke = 10000;
	case Selection = 10001;
	case Value = 10002;
	case RangeValue = 10003;
	case Scroll = 10004;
	case ExpandCollapse = 10005;
	case Grid = 10006;
	case GridItem = 10007;
	case MultipleView = 10008;
	case Window = 10009;
	case SelectionItem = 10010;
	case Dock = 10011;
	case Table = 10012;
	case TableItem = 10013;
	case Text = 10014;
	case Toggle = 10015;
	case Transform = 10016;
	case ScrollItem = 10017;
	case LegacyIAccessible = 10018;
	case ItemContainer = 10019;
	case VirtualizedItem = 10020;
	case SynchronizedInput = 10021;
	case ObjectModel = 10022;
	case Annotation = 10023;
	case Text2 = 10024;
	case Styles = 10025;
	case Spreadsheet = 10026;
	case SpreadsheetItem = 10027;
	case Transform2 = 10028;
	case TextChild = 10029;
	case Drag = 10030;
	case DropTarget = 10031;
	case TextEdit = 10032;
	case CustomNavigation = 10033;
}
