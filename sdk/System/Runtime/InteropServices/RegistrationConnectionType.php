<?php
namespace System\Runtime\InteropServices;
/**
 */
enum RegistrationConnectionType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SingleUse = 0;
	case MultipleUse = 1;
	case MultiSeparate = 2;
	case Suspended = 4;
	case Surrogate = 8;
}
