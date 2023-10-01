<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum AutomationIdType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Property = 0;
	case Pattern = 1;
	case Event = 2;
	case ControlType = 3;
	case TextAttribute = 4;
}
