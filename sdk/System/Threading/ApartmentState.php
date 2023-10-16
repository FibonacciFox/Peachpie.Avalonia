<?php
namespace System\Threading;
/**
 */
enum ApartmentState implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case STA = 0;
	case MTA = 1;
	case Unknown = 2;
}
