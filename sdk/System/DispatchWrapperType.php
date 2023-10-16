<?php
namespace System;
/**
 */
enum DispatchWrapperType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 1;
	case Dispatch = 2;
	case Error = 8;
	case Currency = 16;
	case BStr = 32;
	case SafeArray = 65536;
}
