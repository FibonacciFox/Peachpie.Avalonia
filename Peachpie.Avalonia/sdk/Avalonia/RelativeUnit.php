<?php
namespace Avalonia;
/**
 */
enum RelativeUnit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Relative = 0;
	case Absolute = 1;
}
