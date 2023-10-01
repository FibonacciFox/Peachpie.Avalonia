<?php
namespace Avalonia\Utilities;
/**
 */
enum OperatorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Implicit = 1;
	case Explicit = 2;
}
