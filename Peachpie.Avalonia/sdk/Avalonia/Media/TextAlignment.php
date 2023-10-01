<?php
namespace Avalonia\Media;
/**
 */
enum TextAlignment implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Left = 0;
	case Center = 1;
	case Right = 2;
	case Start = 3;
	case End = 4;
	case DetectFromContent = 5;
	case Justify = 6;
}
