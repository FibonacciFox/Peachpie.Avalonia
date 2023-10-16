<?php
namespace System\Reflection;
/**
 */
enum CustomAttributeEncoding implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Undefined = 0;
	case Boolean = 2;
	case Char = 3;
	case SByte = 4;
	case Byte = 5;
	case Int16 = 6;
	case UInt16 = 7;
	case Int32 = 8;
	case UInt32 = 9;
	case Int64 = 10;
	case UInt64 = 11;
	case Float = 12;
	case Double = 13;
	case String = 14;
	case Array = 29;
	case Type = 80;
	case Object = 81;
	case Field = 83;
	case Property = 84;
	case Enum = 85;
}
