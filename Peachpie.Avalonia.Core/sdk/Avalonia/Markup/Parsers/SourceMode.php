<?php
namespace Avalonia\Markup\Parsers;
/**
 */
enum SourceMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Data = 0;
	case Control = 1;
}
