<?php
namespace Avalonia\X11;
/**
 */
enum StackMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Above = 0;
	case Below = 1;
	case TopIf = 2;
	case BottomIf = 3;
	case Opposite = 4;
}
