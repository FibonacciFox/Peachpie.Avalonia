<?php
namespace System\Globalization;
/**
 */
enum TimeSpanStandardStyles implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Invariant = 1;
	case Localized = 2;
	case RequireFull = 3;
	case Any = 4;
}
