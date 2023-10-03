<?php
namespace Avalonia\Input;
/**
 */
enum KeyModifiers implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Alt = 1;
	case Control = 2;
	case Shift = 4;
	case Meta = 8;
}
