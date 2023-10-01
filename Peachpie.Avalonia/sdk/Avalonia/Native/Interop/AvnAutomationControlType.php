<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnAutomationControlType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AutomationNone = 0;
	case AutomationButton = 1;
	case AutomationCalendar = 2;
	case AutomationCheckBox = 3;
	case AutomationComboBox = 4;
	case AutomationComboBoxItem = 5;
	case AutomationEdit = 6;
	case AutomationHyperlink = 7;
	case AutomationImage = 8;
	case AutomationListItem = 9;
	case AutomationList = 10;
	case AutomationMenu = 11;
	case AutomationMenuBar = 12;
	case AutomationMenuItem = 13;
	case AutomationProgressBar = 14;
	case AutomationRadioButton = 15;
	case AutomationScrollBar = 16;
	case AutomationSlider = 17;
	case AutomationSpinner = 18;
	case AutomationStatusBar = 19;
	case AutomationTab = 20;
	case AutomationTabItem = 21;
	case AutomationText = 22;
	case AutomationToolBar = 23;
	case AutomationToolTip = 24;
	case AutomationTree = 25;
	case AutomationTreeItem = 26;
	case AutomationCustom = 27;
	case AutomationGroup = 28;
	case AutomationThumb = 29;
	case AutomationDataGrid = 30;
	case AutomationDataItem = 31;
	case AutomationDocument = 32;
	case AutomationSplitButton = 33;
	case AutomationWindow = 34;
	case AutomationPane = 35;
	case AutomationHeader = 36;
	case AutomationHeaderItem = 37;
	case AutomationTable = 38;
	case AutomationTitleBar = 39;
	case AutomationSeparator = 40;
}
