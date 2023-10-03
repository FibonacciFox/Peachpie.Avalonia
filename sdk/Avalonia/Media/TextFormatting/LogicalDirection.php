<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
enum LogicalDirection implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Backward = 0;
	case Forward = 1;
}
