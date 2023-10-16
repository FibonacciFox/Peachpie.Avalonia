<?php
namespace System\Reflection;
/**
 */
enum MethodSemanticsAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Setter = 1;
	case Getter = 2;
	case Other = 4;
	case AddOn = 8;
	case RemoveOn = 16;
	case Fire = 32;
}
