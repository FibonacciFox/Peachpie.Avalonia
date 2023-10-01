<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum SupportedTextSelection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Single = 1;
	case Multiple = 2;
}
