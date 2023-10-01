<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnDragEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Enter = 0;
	case Over = 1;
	case Leave = 2;
	case Drop = 3;
}
