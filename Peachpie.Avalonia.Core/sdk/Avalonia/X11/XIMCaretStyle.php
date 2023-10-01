<?php
namespace Avalonia\X11;
/**
 */
enum XIMCaretStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IsInvisible = 0;
	case IsPrimary = 1;
	case IsSecondary = 2;
}
