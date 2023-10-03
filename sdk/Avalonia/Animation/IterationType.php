<?php
namespace Avalonia\Animation;
/**
 */
enum IterationType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Many = 0;
	case Infinite = 1;
}
