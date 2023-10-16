<?php
namespace System;
/**
 */
enum StringSplitOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case RemoveEmptyEntries = 1;
	case TrimEntries = 2;
}
