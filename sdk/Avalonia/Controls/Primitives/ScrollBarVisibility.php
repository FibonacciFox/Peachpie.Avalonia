<?php
namespace Avalonia\Controls\Primitives;
/**
 */
enum ScrollBarVisibility implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Disabled = 0;
	case Auto = 1;
	case Hidden = 2;
	case Visible = 3;
}
