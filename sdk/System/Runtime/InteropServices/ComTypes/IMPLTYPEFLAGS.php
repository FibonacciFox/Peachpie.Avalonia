<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum IMPLTYPEFLAGS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case IMPLTYPEFLAG_FDEFAULT = 1;
	case IMPLTYPEFLAG_FSOURCE = 2;
	case IMPLTYPEFLAG_FRESTRICTED = 4;
	case IMPLTYPEFLAG_FDEFAULTVTABLE = 8;
}
