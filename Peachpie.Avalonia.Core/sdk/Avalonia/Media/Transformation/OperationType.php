<?php
namespace Avalonia\Media\Transformation;
/**
 */
enum OperationType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Translate = 0;
	case Rotate = 1;
	case Scale = 2;
	case Skew = 3;
	case Matrix = 4;
	case Identity = 5;
}
