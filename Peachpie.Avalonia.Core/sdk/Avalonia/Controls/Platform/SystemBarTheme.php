<?php
namespace Avalonia\Controls\Platform;
/**
 */
enum SystemBarTheme implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Light = 0;
	case Dark = 1;
}
