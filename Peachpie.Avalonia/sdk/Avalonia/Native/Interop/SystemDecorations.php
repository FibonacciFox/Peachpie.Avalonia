<?php
namespace Avalonia\Native\Interop;
/**
 */
enum SystemDecorations implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SystemDecorationsNone = 0;
	case SystemDecorationsBorderOnly = 1;
	case SystemDecorationsFull = 2;
}
