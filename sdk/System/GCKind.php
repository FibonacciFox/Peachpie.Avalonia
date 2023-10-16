<?php
namespace System;
/**
 */
enum GCKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Any = 0;
	case Ephemeral = 1;
	case FullBlocking = 2;
	case Background = 3;
}
