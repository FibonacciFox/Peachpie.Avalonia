<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum VARKIND implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VAR_PERINSTANCE = 0;
	case VAR_STATIC = 1;
	case VAR_CONST = 2;
	case VAR_DISPATCH = 3;
}
