<?php
namespace System;
/**
 */
enum GCConfigurationType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Int64 = 0;
	case StringUtf8 = 1;
	case Boolean = 2;
}
