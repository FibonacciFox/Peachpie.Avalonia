<?php
namespace System\IO;
/**
 */
enum FileMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CreateNew = 1;
	case Create = 2;
	case Open = 3;
	case OpenOrCreate = 4;
	case Truncate = 5;
	case Append = 6;
}
