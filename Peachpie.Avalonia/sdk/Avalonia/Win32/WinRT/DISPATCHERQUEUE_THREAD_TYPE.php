<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum DISPATCHERQUEUE_THREAD_TYPE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DQTYPE_THREAD_DEDICATED = 1;
	case DQTYPE_THREAD_CURRENT = 2;
}
