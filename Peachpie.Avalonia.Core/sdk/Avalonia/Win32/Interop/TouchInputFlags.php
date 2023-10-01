<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum TouchInputFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TOUCHEVENTF_MOVE = 1;
	case TOUCHEVENTF_DOWN = 2;
	case TOUCHEVENTF_UP = 4;
	case TOUCHEVENTF_INRANGE = 8;
	case TOUCHEVENTF_PRIMARY = 16;
	case TOUCHEVENTF_NOCOALESCE = 32;
	case TOUCHEVENTF_PALM = 128;
}
