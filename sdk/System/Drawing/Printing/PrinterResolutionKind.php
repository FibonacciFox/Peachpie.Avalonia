<?php
namespace System\Drawing\Printing;
/**
 */
enum PrinterResolutionKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case High = 0;
	case Medium = -4;
	case Low = -3;
	case Draft = -2;
	case Custom = -1;
}
