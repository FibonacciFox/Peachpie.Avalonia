<?php
namespace System\Runtime\CompilerServices;
/**
 */
enum CastResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CannotCast = 0;
	case CanCast = 1;
	case MaybeCast = 2;
}
