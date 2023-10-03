<?php
namespace Avalonia\X11;
/**
 */
enum GXFunction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GXclear = 0;
	case GXand = 1;
	case GXandReverse = 2;
	case GXcopy = 3;
	case GXandInverted = 4;
	case GXnoop = 5;
	case GXxor = 6;
	case GXor = 7;
	case GXnor = 8;
	case GXequiv = 9;
	case GXinvert = 10;
	case GXorReverse = 11;
	case GXcopyInverted = 12;
	case GXorInverted = 13;
	case GXnand = 14;
	case GXset = 15;
}
