<?php
namespace System;
/**
 */
enum State implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Escaped = 0;
	case NotEscaped = 1;
	case StartOfToken = 2;
	case EndOfLine = 3;
}
