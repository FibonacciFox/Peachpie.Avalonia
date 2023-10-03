<?php
namespace Avalonia\Win32\WinRT;
/**
 */
enum PropertyType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Empty = 0;
	case UInt8 = 1;
	case Int16 = 2;
	case UInt16 = 3;
	case Int32 = 4;
	case UInt32 = 5;
	case Int64 = 6;
	case UInt64 = 7;
	case Single = 8;
	case Double = 9;
	case Char16 = 10;
	case Boolean = 11;
	case String = 12;
	case Inspectable = 13;
	case DateTime = 14;
	case TimeSpan = 15;
	case Guid = 16;
	case Point = 17;
	case Size = 18;
	case Rect = 19;
	case OtherType = 20;
	case UInt8Array = 1025;
	case Int16Array = 1026;
	case UInt16Array = 1027;
	case Int32Array = 1028;
	case UInt32Array = 1029;
	case Int64Array = 1030;
	case UInt64Array = 1031;
	case SingleArray = 1032;
	case DoubleArray = 1033;
	case Char16Array = 1034;
	case BooleanArray = 1035;
	case StringArray = 1036;
	case InspectableArray = 1037;
	case DateTimeArray = 1038;
	case TimeSpanArray = 1039;
	case GuidArray = 1040;
	case PointArray = 1041;
	case SizeArray = 1042;
	case RectArray = 1043;
	case OtherTypeArray = 1044;
}
