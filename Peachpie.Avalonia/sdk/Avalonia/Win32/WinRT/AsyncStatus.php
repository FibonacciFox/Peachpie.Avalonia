<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum AsyncStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Started = 0;
	case Completed = 1;
	case Canceled = 2;
	case Error = 3;
}
