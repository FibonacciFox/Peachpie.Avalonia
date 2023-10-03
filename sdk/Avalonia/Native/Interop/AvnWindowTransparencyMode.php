<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnWindowTransparencyMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Opaque = 0;
	case Transparent = 1;
	case Blur = 2;
}
