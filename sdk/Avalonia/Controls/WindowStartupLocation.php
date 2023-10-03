<?php
namespace Avalonia\Controls;
/**
 */
enum WindowStartupLocation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Manual = 0;
	case CenterScreen = 1;
	case CenterOwner = 2;
}
