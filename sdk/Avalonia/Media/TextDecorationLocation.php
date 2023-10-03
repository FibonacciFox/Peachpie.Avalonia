<?php
namespace Avalonia\Media;
/**
 */
enum TextDecorationLocation implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Underline = 0;
	case Overline = 1;
	case Strikethrough = 2;
	case Baseline = 3;
}
