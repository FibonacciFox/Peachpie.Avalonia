<?php
namespace System;
/**
 */
enum ConsoleSpecialKey implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ControlC = 0;
	case ControlBreak = 1;
}
