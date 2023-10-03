<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum NavigateDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Parent = 0;
	case NextSibling = 1;
	case PreviousSibling = 2;
	case FirstChild = 3;
	case LastChild = 4;
}
