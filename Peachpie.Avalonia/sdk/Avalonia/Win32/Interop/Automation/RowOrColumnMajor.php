<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum RowOrColumnMajor implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RowMajor = 0;
	case ColumnMajor = 1;
	case Indeterminate = 2;
}
