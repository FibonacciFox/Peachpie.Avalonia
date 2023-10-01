<?php
namespace Avalonia\X11;
/**
 */
enum PropertyMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Replace = 0;
	case Prepend = 1;
	case Append = 2;
}
