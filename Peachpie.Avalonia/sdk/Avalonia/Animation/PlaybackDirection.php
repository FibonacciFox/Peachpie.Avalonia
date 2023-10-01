<?php
namespace Avalonia\Animation;
/**
 */
enum PlaybackDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Normal = 0;
	case Reverse = 1;
	case Alternate = 2;
	case AlternateReverse = 3;
}
