<?php
namespace System\Globalization;
/**
 */
enum StrongBidiCategory implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Other = 0;
	case StrongLeftToRight = 32;
	case StrongRightToLeft = 64;
}
