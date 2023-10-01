<?php
namespace Avalonia\Utilities;
/**
 */
enum Type implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Empty;
	case Single;
	case Array;
	case Dictionary;
}
