<?php
namespace Avalonia\Input;
/**
 */
enum DragDropEffects implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Copy = 1;
	case Move = 2;
	case Link = 4;
}
