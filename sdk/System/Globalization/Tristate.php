<?php
namespace System\Globalization;
/**
 */
enum Tristate implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NotInitialized = 0;
	case False = 1;
	case True = 2;
}
