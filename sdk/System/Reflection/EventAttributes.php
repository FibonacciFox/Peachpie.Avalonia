<?php
namespace System\Reflection;
/**
 */
enum EventAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case SpecialName = 512;
	case RTSpecialName = 1024;
	case ReservedMask = 1024;
}
