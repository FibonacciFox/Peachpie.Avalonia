<?php
namespace Avalonia\Animation;
/**
 */
enum FillMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case Forward = 1;
	case Backward = 2;
	case Both = 3;
}
