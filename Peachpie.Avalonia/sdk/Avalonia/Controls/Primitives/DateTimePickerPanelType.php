<?php
namespace Avalonia\Controls\Primitives;
/**
 */
enum DateTimePickerPanelType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Year = 0;
	case Month = 1;
	case Day = 2;
	case Hour = 3;
	case Minute = 4;
	case TimePeriod = 5;
}
