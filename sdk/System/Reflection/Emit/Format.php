<?php
namespace System\Reflection\Emit;
/**
 */
enum Format implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ToString = 0;
	case FullName = 1;
	case AssemblyQualifiedName = 2;
}
