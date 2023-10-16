<?php
namespace System\Drawing\Printing;
/**
 */
enum PrintAction implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PrintToFile = 0;
	case PrintToPreview = 1;
	case PrintToPrinter = 2;
}
