<?php
namespace System\Diagnostics\Tracing;
/**
 */
enum TraceLoggingDataType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Nil = 0;
	case Utf16String = 1;
	case MbcsString = 2;
	case Int8 = 3;
	case UInt8 = 4;
	case Int16 = 5;
	case UInt16 = 6;
	case Int32 = 7;
	case UInt32 = 8;
	case Int64 = 9;
	case UInt64 = 10;
	case Float = 11;
	case Double = 12;
	case Boolean32 = 13;
	case Binary = 14;
	case Guid = 15;
	case FileTime = 17;
	case SystemTime = 18;
	case HexInt32 = 20;
	case HexInt64 = 21;
	case CountedUtf16String = 22;
	case CountedMbcsString = 23;
	case Struct = 24;
	case Char16 = 516;
	case Char8 = 518;
	case Boolean8 = 772;
	case HexInt8 = 1028;
	case HexInt16 = 1030;
	case Utf16Xml = 2817;
	case MbcsXml = 2818;
	case CountedUtf16Xml = 2838;
	case CountedMbcsXml = 2839;
	case Utf16Json = 3073;
	case MbcsJson = 3074;
	case CountedUtf16Json = 3094;
	case CountedMbcsJson = 3095;
	case HResult = 3847;
}
