<?php
namespace System;
/**
 */
enum ExceptionMessageKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ThreadAbort = 1;
	case ThreadInterrupted = 2;
	case OutOfMemory = 3;
}
