<?php
namespace System\Reflection\Emit;
/**
 */
enum TypeKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IsArray = 1;
	case IsPointer = 2;
	case IsByRef = 3;
}
