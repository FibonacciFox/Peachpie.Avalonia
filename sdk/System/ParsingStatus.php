<?php
namespace System;
/**
 */
enum ParsingStatus implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case OK = 0;
	case Failed = 1;
	case Overflow = 2;
}
