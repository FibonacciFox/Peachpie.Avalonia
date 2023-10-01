<?php
namespace Avalonia\LogicalTree;
/**
 */
enum ChildIndexChangedAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ChildIndexChanged = 0;
	case ChildIndexesReset = 1;
	case TotalCountChanged = 2;
}
