<?php
namespace Avalonia\Controls;
/**
 */
enum TickBarPlacement implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case Top = 1;
	case Right = 2;
	case Bottom = 3;
}
