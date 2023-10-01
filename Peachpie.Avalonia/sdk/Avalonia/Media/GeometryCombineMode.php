<?php
namespace Avalonia\Media;
/**
 */
enum GeometryCombineMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Union = 0;
	case Intersect = 1;
	case Xor = 2;
	case Exclude = 3;
}
