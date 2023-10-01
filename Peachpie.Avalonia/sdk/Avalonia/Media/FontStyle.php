<?php
namespace Avalonia\Media;
/**
 */
enum FontStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Italic = 1;
	case Oblique = 2;
}
