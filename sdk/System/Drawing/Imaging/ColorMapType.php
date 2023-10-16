<?php
namespace System\Drawing\Imaging;
/**
 */
enum ColorMapType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Brush = 1;
}
