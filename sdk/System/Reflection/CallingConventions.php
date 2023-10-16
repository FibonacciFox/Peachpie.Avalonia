<?php
namespace System\Reflection;
/**
 */
enum CallingConventions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Standard = 1;
	case VarArgs = 2;
	case Any = 3;
	case HasThis = 32;
	case ExplicitThis = 64;
}
