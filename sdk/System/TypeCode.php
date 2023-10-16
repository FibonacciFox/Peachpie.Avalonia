<?php
namespace System;
/**
 */
enum TypeCode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Empty = 0;
	case Object = 1;
	case DBNull = 2;
	case Boolean = 3;
	case Char = 4;
	case SByte = 5;
	case Byte = 6;
	case Int16 = 7;
	case UInt16 = 8;
	case Int32 = 9;
	case UInt32 = 10;
	case Int64 = 11;
	case UInt64 = 12;
	case Single = 13;
	case Double = 14;
	case Decimal = 15;
	case DateTime = 16;
	case String = 18;
}
