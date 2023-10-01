<?php
namespace Avalonia\Controls;
/**
 */
enum TickPlacement implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case TopLeft = 1;
	case BottomRight = 2;
	case Outside = 3;
}
