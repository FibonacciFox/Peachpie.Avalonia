<?php
namespace Avalonia\Media;
/**
 */
enum FillRule implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case EvenOdd = 0;
	case NonZero = 1;
}
