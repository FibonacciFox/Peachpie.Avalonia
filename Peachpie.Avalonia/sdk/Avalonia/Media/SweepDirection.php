<?php
namespace Avalonia\Media;
/**
 */
enum SweepDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CounterClockwise = 0;
	case Clockwise = 1;
}
