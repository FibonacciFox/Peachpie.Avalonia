<?php
namespace System\Resources;
/**
 */
enum ResourceTypeCode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Null = 0;
	case String = 1;
	case Boolean = 2;
	case Char = 3;
	case Byte = 4;
	case SByte = 5;
	case Int16 = 6;
	case UInt16 = 7;
	case Int32 = 8;
	case UInt32 = 9;
	case Int64 = 10;
	case UInt64 = 11;
	case Single = 12;
	case Double = 13;
	case Decimal = 14;
	case DateTime = 15;
	case TimeSpan = 16;
	case LastPrimitive = 16;
	case ByteArray = 32;
	case Stream = 33;
	case StartOfUserTypes = 64;
}
