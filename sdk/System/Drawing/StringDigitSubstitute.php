<?php
namespace System\Drawing;
/**
 */
enum StringDigitSubstitute implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case User = 0;
	case None = 1;
	case National = 2;
	case Traditional = 3;
}
