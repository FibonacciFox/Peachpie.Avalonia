<?php
namespace System\Runtime\InteropServices;
/**
 */
enum CreateObjectFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case TrackerObject = 1;
	case UniqueInstance = 2;
	case Aggregation = 4;
	case Unwrap = 8;
}
