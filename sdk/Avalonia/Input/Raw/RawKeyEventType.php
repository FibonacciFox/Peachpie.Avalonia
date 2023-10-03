<?php
namespace Avalonia\Input\Raw;
/**
 */
enum RawKeyEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case KeyDown = 0;
	case KeyUp = 1;
}
