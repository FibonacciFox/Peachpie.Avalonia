<?php
namespace Avalonia\Input;
/**
 */
enum HoldingState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Started = 0;
	case Completed = 1;
	case Cancelled = 2;
}
