<?php
namespace System;
/**
 */
enum StringComparison implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CurrentCulture = 0;
	case CurrentCultureIgnoreCase = 1;
	case InvariantCulture = 2;
	case InvariantCultureIgnoreCase = 3;
	case Ordinal = 4;
	case OrdinalIgnoreCase = 5;
}
