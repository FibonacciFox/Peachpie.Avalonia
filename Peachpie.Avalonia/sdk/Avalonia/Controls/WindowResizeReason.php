<?php
namespace Avalonia\Controls;
/**
 */
enum WindowResizeReason implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unspecified = 0;
	case User = 1;
	case Application = 2;
	case Layout = 3;
	case DpiChange = 4;
}
