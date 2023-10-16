<?php
namespace System;
/**
 */
enum GuidParseThrowStyle implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case All = 1;
	case AllButOverflow = 2;
}
