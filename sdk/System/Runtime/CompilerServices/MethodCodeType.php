<?php
namespace System\Runtime\CompilerServices;
/**
 */
enum MethodCodeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IL = 0;
	case Native = 1;
	case OPTIL = 2;
	case Runtime = 3;
}
