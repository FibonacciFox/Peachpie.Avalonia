<?php
namespace Avalonia\Controls;
/**
 */
enum CalendarDatePickerFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Long = 0;
	case Short = 1;
	case Custom = 2;
}
