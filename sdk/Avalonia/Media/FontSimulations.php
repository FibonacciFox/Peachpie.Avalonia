<?php
namespace Avalonia\Media;
/**
 */
enum FontSimulations implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Bold = 1;
	case Oblique = 2;
}
