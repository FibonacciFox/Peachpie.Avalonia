<?php
namespace System\Reflection;
/**
 */
enum PortableExecutableKinds implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotAPortableExecutableImage = 0;
	case ILOnly = 1;
	case Required32Bit = 2;
	case PE32Plus = 4;
	case Unmanaged32Bit = 8;
	case Preferred32Bit = 16;
}
