<?php
namespace System\Security\AccessControl;
/**
 */
enum ComparisonResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LessThan = 0;
	case EqualTo = 1;
	case GreaterThan = 2;
}
