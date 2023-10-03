<?php
namespace Avalonia\Controls;
/**
 */
enum CalendarMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Month = 0;
	case Year = 1;
	case Decade = 2;
}
