<?php
namespace System;
/**
 */
enum PlatformID implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Win32S = 0;
	case Win32Windows = 1;
	case Win32NT = 2;
	case WinCE = 3;
	case Unix = 4;
	case Xbox = 5;
	case MacOSX = 6;
	case Other = 7;
}
