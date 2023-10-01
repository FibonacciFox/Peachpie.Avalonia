<?php
namespace Avalonia\Platform;
/**
 */
enum FormFactorType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case Desktop = 1;
	case Mobile = 2;
}
