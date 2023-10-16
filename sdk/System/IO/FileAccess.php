<?php
namespace System\IO;
/**
 */
enum FileAccess implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Read = 1;
	case Write = 2;
	case ReadWrite = 3;
}
