<?php
namespace System\IO;
/**
 */
enum MatchType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Simple = 0;
	case Win32 = 1;
}
