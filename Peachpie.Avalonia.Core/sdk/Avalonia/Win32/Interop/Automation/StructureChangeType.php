<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum StructureChangeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ChildAdded = 0;
	case ChildRemoved = 1;
	case ChildrenInvalidated = 2;
	case ChildrenBulkAdded = 3;
	case ChildrenBulkRemoved = 4;
	case ChildrenReordered = 5;
}
