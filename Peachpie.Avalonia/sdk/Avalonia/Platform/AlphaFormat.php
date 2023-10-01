<?php
namespace Avalonia\Platform;
/**
 */
enum AlphaFormat implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Premul = 0;
	case Unpremul = 1;
	case Opaque = 2;
}
