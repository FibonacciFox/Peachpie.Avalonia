<?php
namespace Avalonia\Input;
/**
 */
enum PullDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TopToBottom = 0;
	case BottomToTop = 1;
	case LeftToRight = 2;
	case RightToLeft = 3;
}
