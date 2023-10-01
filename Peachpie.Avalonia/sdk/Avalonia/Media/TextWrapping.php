<?php
namespace Avalonia\Media;
/**
 */
enum TextWrapping implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoWrap = 0;
	case Wrap = 1;
	case WrapWithOverflow = 2;
}
