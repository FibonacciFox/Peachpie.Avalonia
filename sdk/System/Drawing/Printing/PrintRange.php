<?php
namespace System\Drawing\Printing;
/**
 */
enum PrintRange implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case AllPages = 0;
	case Selection = 1;
	case SomePages = 2;
	case CurrentPage = 4194304;
}
