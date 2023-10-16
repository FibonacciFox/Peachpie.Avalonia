<?php
namespace System\IO;
/**
 */
enum MatchCasing implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PlatformDefault = 0;
	case CaseSensitive = 1;
	case CaseInsensitive = 2;
}
