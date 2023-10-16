<?php
namespace System;
/**
 */
enum Primitives implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Boolean = 8;
	case Char = 16;
	case SByte = 32;
	case Byte = 64;
	case Int16 = 128;
	case UInt16 = 256;
	case Int32 = 512;
	case UInt32 = 1024;
	case Int64 = 2048;
	case UInt64 = 4096;
	case Single = 8192;
	case Double = 16384;
	case Decimal = 32768;
	case DateTime = 65536;
	case String = 262144;
}
