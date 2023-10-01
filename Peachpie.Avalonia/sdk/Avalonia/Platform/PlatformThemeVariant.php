<?php
namespace Avalonia\Platform;
/**
 */
enum PlatformThemeVariant implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Light = 0;
	case Dark = 1;
}
