<?php
namespace Avalonia\Automation;
/**
 */
enum AccessibilityView implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Raw = 1;
	case Control = 2;
	case Content = 3;
}
