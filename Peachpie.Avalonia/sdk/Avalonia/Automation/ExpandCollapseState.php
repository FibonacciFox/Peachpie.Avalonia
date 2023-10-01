<?php
namespace Avalonia\Automation;
/**
 */
enum ExpandCollapseState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Collapsed = 0;
	case Expanded = 1;
	case LeafNode = 2;
	case PartiallyExpanded = 3;
}
