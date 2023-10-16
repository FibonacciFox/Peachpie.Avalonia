<?php
namespace System\Drawing\Text;
/**
 */
enum GenericFontFamilies implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Serif = 0;
	case SansSerif = 1;
	case Monospace = 2;
}
