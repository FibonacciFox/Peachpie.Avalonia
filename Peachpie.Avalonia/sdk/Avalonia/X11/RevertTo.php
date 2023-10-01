<?php
namespace Avalonia\X11;
/**
 */
enum RevertTo implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case PointerRoot = 1;
	case Parent = 2;
}
