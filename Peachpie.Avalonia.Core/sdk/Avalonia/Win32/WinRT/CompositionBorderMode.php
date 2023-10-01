<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionBorderMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Inherit = 0;
	case Soft = 1;
	case Hard = 2;
}
