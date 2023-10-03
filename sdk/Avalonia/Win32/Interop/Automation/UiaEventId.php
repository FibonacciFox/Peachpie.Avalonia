<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum UiaEventId implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ToolTipOpened = 20000;
	case ToolTipClosed = 20001;
	case StructureChanged = 20002;
	case MenuOpened = 20003;
	case AutomationPropertyChanged = 20004;
	case AutomationFocusChanged = 20005;
	case AsyncContentLoaded = 20006;
	case MenuClosed = 20007;
	case LayoutInvalidated = 20008;
	case Invoke_Invoked = 20009;
	case SelectionItem_ElementAddedToSelection = 20010;
	case SelectionItem_ElementRemovedFromSelection = 20011;
	case SelectionItem_ElementSelected = 20012;
	case Selection_Invalidated = 20013;
	case Text_TextSelectionChanged = 20014;
	case Text_TextChanged = 20015;
	case Window_WindowOpened = 20016;
	case Window_WindowClosed = 20017;
	case MenuModeStart = 20018;
	case MenuModeEnd = 20019;
	case InputReachedTarget = 20020;
	case InputReachedOtherElement = 20021;
	case InputDiscarded = 20022;
	case SystemAlert = 20023;
	case LiveRegionChanged = 20024;
	case HostedFragmentRootsInvalidated = 20025;
	case Drag_DragStart = 20026;
	case Drag_DragCancel = 20027;
	case Drag_DragComplete = 20028;
	case DropTarget_DragEnter = 20029;
	case DropTarget_DragLeave = 20030;
	case DropTarget_Dropped = 20031;
	case TextEdit_TextChanged = 20032;
	case TextEdit_ConversionTargetChanged = 20033;
	case Changes = 20034;
}
