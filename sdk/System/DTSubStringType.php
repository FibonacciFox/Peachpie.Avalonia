<?php
namespace System;
/**
 */
enum DTSubStringType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Unknown = 0;
	case Invalid = 1;
	case Number = 2;
	case End = 3;
	case Other = 4;
}
