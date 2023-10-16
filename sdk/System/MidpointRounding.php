<?php
namespace System;
/**
 */
enum MidpointRounding implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ToEven = 0;
	case AwayFromZero = 1;
	case ToZero = 2;
	case ToNegativeInfinity = 3;
	case ToPositiveInfinity = 4;
}
