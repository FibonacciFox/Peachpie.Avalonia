<?php
namespace Avalonia\Layout;
/**
 */
enum ArrangeResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Arranged = 0;
	case NotVisible = 1;
	case AncestorMeasureInvalid = 2;
}
