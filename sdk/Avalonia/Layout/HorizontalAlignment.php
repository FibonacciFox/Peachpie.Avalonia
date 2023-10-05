<?php
namespace Avalonia\Layout;
/**
 */
enum HorizontalAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Stretch = 0;
	case Left = 1;
	case Center = 2;
	case Right = 3;
}
