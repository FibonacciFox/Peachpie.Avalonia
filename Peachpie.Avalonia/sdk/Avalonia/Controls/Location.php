<?php
namespace Avalonia\Controls;
/**
 */
enum Location implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case Right = 1;
}
