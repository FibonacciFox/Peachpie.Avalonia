<?php
namespace System\Drawing;
/**
 */
enum FontStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Regular = 0;
	case Bold = 1;
	case Italic = 2;
	case Underline = 4;
	case Strikeout = 8;
}
