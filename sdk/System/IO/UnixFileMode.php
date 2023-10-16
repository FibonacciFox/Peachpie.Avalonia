<?php
namespace System\IO;
/**
 */
enum UnixFileMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case OtherExecute = 1;
	case OtherWrite = 2;
	case OtherRead = 4;
	case GroupExecute = 8;
	case GroupWrite = 16;
	case GroupRead = 32;
	case UserExecute = 64;
	case UserWrite = 128;
	case UserRead = 256;
	case StickyBit = 512;
	case SetGroup = 1024;
	case SetUser = 2048;
}
