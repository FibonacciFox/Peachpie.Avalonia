<?php
namespace Avalonia\Media;
/**
 */
enum AlignmentX implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case Center = 1;
	case Right = 2;
}
