<?php
namespace Avalonia\Layout;
/**
 */
enum VerticalAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Stretch = 0;
	case Top = 1;
	case Center = 2;
	case Bottom = 3;
}
