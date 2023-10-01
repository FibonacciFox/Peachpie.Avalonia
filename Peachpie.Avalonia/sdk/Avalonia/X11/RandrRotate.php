<?php
namespace Avalonia\X11;
/**
 */
enum RandrRotate implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RR_Rotate_0 = 1;
	case RR_Rotate_90 = 2;
	case RR_Rotate_180 = 4;
	case RR_Rotate_270 = 8;
}
