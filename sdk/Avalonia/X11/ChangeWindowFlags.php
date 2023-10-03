<?php
namespace Avalonia\X11;
/**
 */
enum ChangeWindowFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CWX = 1;
	case CWY = 2;
	case CWWidth = 4;
	case CWHeight = 8;
	case CWBorderWidth = 16;
	case CWSibling = 32;
	case CWStackMode = 64;
}
