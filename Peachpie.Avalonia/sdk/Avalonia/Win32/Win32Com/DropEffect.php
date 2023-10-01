<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
enum DropEffect implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Copy = 1;
	case Move = 2;
	case Link = 4;
	case Scroll = -2147483648;
}
