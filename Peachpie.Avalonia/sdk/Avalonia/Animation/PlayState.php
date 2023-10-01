<?php
namespace Avalonia\Animation;
/**
 */
enum PlayState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Run = 0;
	case Pause = 1;
	case Stop = 2;
}
