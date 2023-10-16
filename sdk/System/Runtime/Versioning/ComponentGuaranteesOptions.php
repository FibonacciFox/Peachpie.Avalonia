<?php
namespace System\Runtime\Versioning;
/**
 */
enum ComponentGuaranteesOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Exchange = 1;
	case Stable = 2;
	case SideBySide = 4;
}
