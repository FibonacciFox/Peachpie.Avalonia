<?php
namespace Avalonia\Media;
/**
 */
enum PenLineCap implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Flat = 0;
	case Round = 1;
	case Square = 2;
}
