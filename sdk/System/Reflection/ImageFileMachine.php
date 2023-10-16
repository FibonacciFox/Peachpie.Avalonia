<?php
namespace System\Reflection;
/**
 */
enum ImageFileMachine implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case I386 = 332;
	case IA64 = 452;
	case AMD64 = 512;
	case ARM = 34404;
}
