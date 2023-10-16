<?php
namespace System\IO;
/**
 */
enum FileOptions implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case WriteThrough = 16384;
	case Asynchronous = 67108864;
	case RandomAccess = 134217728;
	case DeleteOnClose = 268435456;
	case SequentialScan = 1073741824;
	case Encrypted = -2147483648;
}
