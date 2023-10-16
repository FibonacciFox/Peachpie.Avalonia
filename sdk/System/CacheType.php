<?php
namespace System;
/**
 */
enum CacheType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Method = 0;
	case Constructor = 1;
	case Field = 2;
	case Property = 3;
	case Event = 4;
	case Interface = 5;
	case NestedType = 6;
}
