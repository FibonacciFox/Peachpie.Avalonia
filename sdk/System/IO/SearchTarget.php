<?php
namespace System\IO;
/**
 */
enum SearchTarget implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Files = 1;
	case Directories = 2;
	case Both = 3;
}
