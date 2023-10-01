<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum DISPATCHERQUEUE_THREAD_APARTMENTTYPE implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DQTAT_COM_NONE = 0;
	case DQTAT_COM_ASTA = 1;
	case DQTAT_COM_STA = 2;
}
