<?php
namespace Avalonia\Controls;
/**
 */
enum Dock implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case Bottom = 1;
	case Right = 2;
	case Top = 3;
}
