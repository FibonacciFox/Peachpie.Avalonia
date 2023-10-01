<?php
namespace Avalonia\Controls;
/**
 */
enum ExpandDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Down = 0;
	case Up = 1;
	case Left = 2;
	case Right = 3;
}
