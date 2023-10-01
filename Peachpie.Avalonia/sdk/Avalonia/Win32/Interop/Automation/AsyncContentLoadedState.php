<?php
namespace Avalonia\Win32\Interop\Automation;
/**
 */
enum AsyncContentLoadedState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Beginning = 0;
	case Progress = 1;
	case Completed = 2;
}
