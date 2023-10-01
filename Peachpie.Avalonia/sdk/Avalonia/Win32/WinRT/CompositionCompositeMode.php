<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum CompositionCompositeMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Inherit = 0;
	case SourceOver = 1;
	case DestinationInvert = 2;
	case MinBlend = 3;
}
