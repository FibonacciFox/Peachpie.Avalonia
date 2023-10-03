<?php
namespace Avalonia\Media;
/**
 */
enum GradientSpreadMethod implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Pad = 0;
	case Reflect = 1;
	case Repeat = 2;
}
