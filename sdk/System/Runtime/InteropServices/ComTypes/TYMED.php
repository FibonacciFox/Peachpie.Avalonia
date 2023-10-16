<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum TYMED implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TYMED_HGLOBAL = 0;
	case TYMED_FILE = 1;
	case TYMED_ISTREAM = 2;
	case TYMED_ISTORAGE = 4;
	case TYMED_GDI = 8;
	case TYMED_MFPICT = 16;
	case TYMED_ENHMF = 32;
	case TYMED_NULL = 64;
}
