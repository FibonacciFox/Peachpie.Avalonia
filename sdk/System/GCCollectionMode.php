<?php
namespace System;
/**
 */
enum GCCollectionMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Default = 0;
	case Forced = 1;
	case Optimized = 2;
	case Aggressive = 3;
}
