<?php
namespace System\Drawing\Imaging;
/**
 */
enum EncoderParameterValueType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ValueTypeByte = 1;
	case ValueTypeAscii = 2;
	case ValueTypeShort = 3;
	case ValueTypeLong = 4;
	case ValueTypeRational = 5;
	case ValueTypeLongRange = 6;
	case ValueTypeUndefined = 7;
	case ValueTypeRationalRange = 8;
	case ValueTypePointer = 9;
}
