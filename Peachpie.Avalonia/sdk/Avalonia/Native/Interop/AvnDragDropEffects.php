<?php
namespace Avalonia\Native\Interop;
/**
 */
enum AvnDragDropEffects implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Copy = 1;
	case Move = 2;
	case Link = 4;
}
