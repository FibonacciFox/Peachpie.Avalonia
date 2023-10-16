<?php
namespace System\Reflection;
/**
 */
enum PropertyAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case SpecialName = 512;
	case RTSpecialName = 1024;
	case HasDefault = 4096;
	case Reserved2 = 8192;
	case Reserved3 = 16384;
	case Reserved4 = 32768;
	case ReservedMask = 62464;
}
