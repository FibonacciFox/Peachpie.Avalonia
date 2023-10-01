<?php
namespace Avalonia\X11;
/**
 */
enum GCFillRule implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EvenOddRule = 0;
	case WindingRule = 1;
}
