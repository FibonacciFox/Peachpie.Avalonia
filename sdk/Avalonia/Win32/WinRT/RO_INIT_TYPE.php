<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum RO_INIT_TYPE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case RO_INIT_SINGLETHREADED = 0;
	case RO_INIT_MULTITHREADED = 1;
}
