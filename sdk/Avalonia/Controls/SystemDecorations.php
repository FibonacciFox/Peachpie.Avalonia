<?php
namespace Avalonia\Controls;
/**
 */
enum SystemDecorations implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case BorderOnly = 1;
	case Full = 2;
}
