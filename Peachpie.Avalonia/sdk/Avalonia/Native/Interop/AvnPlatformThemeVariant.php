<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnPlatformThemeVariant implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Light = 0;
	case Dark = 1;
	case HighContrastLight = 2;
	case HighContrastDark = 3;
}
