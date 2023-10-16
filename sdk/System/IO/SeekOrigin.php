<?php
namespace System\IO;
/**
 */
enum SeekOrigin implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Begin = 0;
	case Current = 1;
	case End = 2;
}
