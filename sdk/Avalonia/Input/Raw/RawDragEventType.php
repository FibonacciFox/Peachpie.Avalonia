<?php
namespace Avalonia\Input\Raw;
/**
 */
enum RawDragEventType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DragEnter = 0;
	case DragOver = 1;
	case DragLeave = 2;
	case Drop = 3;
}
