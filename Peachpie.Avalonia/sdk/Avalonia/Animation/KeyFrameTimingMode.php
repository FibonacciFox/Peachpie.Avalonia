<?php
namespace Avalonia\Animation;
/**
 */
enum KeyFrameTimingMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TimeSpan = 1;
	case Cue = 2;
}
