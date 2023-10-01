<?php
namespace Avalonia\Media\Transformation;
/**
 */
enum Unit implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Pixel = 1;
	case Radian = 2;
	case Gradian = 3;
	case Degree = 4;
	case Turn = 5;
}
