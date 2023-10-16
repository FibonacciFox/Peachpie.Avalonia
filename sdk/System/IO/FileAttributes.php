<?php
namespace System\IO;
/**
 */
enum FileAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ReadOnly = 1;
	case Hidden = 2;
	case System = 4;
	case Directory = 16;
	case Archive = 32;
	case Device = 64;
	case Normal = 128;
	case Temporary = 256;
	case SparseFile = 512;
	case ReparsePoint = 1024;
	case Compressed = 2048;
	case Offline = 4096;
	case NotContentIndexed = 8192;
	case Encrypted = 16384;
	case IntegrityStream = 32768;
	case NoScrubData = 131072;
}
