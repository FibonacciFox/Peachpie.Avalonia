<?php
namespace Avalonia\Collections\Pooled;
/**
 */
enum ClearMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Auto = 0;
	case Always = 1;
	case Never = 2;
}
