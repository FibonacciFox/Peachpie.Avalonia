<?php
namespace System\Reflection;
/**
 */
enum ParameterAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case In = 1;
	case Out = 2;
	case Lcid = 4;
	case Retval = 8;
	case Optional = 16;
	case HasDefault = 4096;
	case HasFieldMarshal = 8192;
	case Reserved3 = 16384;
	case Reserved4 = 32768;
	case ReservedMask = 61440;
}
