<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnRawKeyEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case KeyDown = 0;
	case KeyUp = 1;
}
