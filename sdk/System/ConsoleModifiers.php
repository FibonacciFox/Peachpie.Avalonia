<?php
namespace System;
/**
 */
enum ConsoleModifiers implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Alt = 1;
	case Shift = 2;
	case Control = 4;
}
