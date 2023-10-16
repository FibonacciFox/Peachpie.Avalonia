<?php
namespace System\Globalization;
/**
 */
enum LocaleGroupingData implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Digit = 16;
	case Monetary = 24;
}
