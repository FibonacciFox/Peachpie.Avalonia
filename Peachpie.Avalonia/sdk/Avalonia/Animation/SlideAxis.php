<?php
namespace Avalonia\Animation;
/**
 */
enum SlideAxis implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Horizontal = 0;
	case Vertical = 1;
}
