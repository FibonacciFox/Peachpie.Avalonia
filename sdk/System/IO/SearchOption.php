<?php
namespace System\IO;
/**
 */
enum SearchOption implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TopDirectoryOnly = 0;
	case AllDirectories = 1;
}
