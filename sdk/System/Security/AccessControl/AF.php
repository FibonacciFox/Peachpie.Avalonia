<?php
namespace System\Security\AccessControl;
/**
 */
enum AF implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CI = 1;
	case OI = 1;
	case IO = 2;
	case NP = 4;
	case Invalid = 8;
}
