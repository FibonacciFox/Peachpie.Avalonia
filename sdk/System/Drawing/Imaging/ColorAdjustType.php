<?php
namespace System\Drawing\Imaging;
/**
 */
enum ColorAdjustType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Bitmap = 1;
	case Brush = 2;
	case Pen = 3;
	case Text = 4;
	case Count = 5;
	case Any = 6;
}
