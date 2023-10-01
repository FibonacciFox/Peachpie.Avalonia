<?php
namespace Avalonia\X11;
/**
 */
enum CreateWindowArgs implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CopyFromParent = 0;
	case ParentRelative = 1;
	case InputOutput = 1;
	case InputOnly = 2;
}
