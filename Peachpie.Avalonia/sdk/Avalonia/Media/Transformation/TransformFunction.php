<?php
namespace Avalonia\Media\Transformation;
/**
 */
enum TransformFunction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Invalid = 0;
	case Translate = 1;
	case TranslateX = 2;
	case TranslateY = 3;
	case Scale = 4;
	case ScaleX = 5;
	case ScaleY = 6;
	case Skew = 7;
	case SkewX = 8;
	case SkewY = 9;
	case Rotate = 10;
	case Matrix = 11;
}
