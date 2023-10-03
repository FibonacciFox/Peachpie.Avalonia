<?php
namespace Avalonia\Data;
/**
 */
enum RelativeSourceMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DataContext = 0;
	case TemplatedParent = 1;
	case Self = 2;
	case FindAncestor = 3;
}
