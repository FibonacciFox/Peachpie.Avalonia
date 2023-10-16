<?php
namespace System\Reflection\Emit;
/**
 */
enum OpCodeType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Annotation = 0;
	case Macro = 1;
	case Nternal = 2;
	case Objmodel = 3;
	case Prefix = 4;
	case Primitive = 5;
}
