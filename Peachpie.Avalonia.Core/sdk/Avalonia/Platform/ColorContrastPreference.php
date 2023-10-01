<?php
namespace Avalonia\Platform;
/**
 */
enum ColorContrastPreference implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoPreference = 0;
	case High = 1;
}
