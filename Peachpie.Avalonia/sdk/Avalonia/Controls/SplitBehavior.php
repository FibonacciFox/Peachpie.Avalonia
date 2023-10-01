<?php
namespace Avalonia\Controls;
/**
 */
enum SplitBehavior implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Split = 0;
	case Resize1 = 1;
	case Resize2 = 2;
}
