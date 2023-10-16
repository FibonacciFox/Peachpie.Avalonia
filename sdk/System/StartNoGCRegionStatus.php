<?php
namespace System;
/**
 */
enum StartNoGCRegionStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Succeeded = 0;
	case NotEnoughMemory = 1;
	case AmountTooLarge = 2;
	case AlreadyInProgress = 3;
}
