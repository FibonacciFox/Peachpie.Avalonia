<?php
namespace Avalonia\Automation;
/**
 */
enum AutomationLiveSetting implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Off = 0;
	case Polite = 1;
	case Assertive = 2;
}
