<?php
namespace Avalonia\Controls;
/**
 */
enum CalendarSelectionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SingleDate = 0;
	case SingleRange = 1;
	case MultipleRange = 2;
	case None = 3;
}
