<?php
namespace System\Globalization;
/**
 */
enum DigitShapes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Context = 0;
	case None = 1;
	case NativeNational = 2;
}
