<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnAutomationProperty implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AutomationPeer_BoundingRectangle = 0;
	case AutomationPeer_ClassName = 1;
	case AutomationPeer_Name = 2;
	case RangeValueProvider_Value = 3;
}
