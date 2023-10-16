<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum ADVF implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case ADVF_NODATA = 1;
	case ADVF_PRIMEFIRST = 2;
	case ADVF_ONLYONCE = 4;
	case ADVF_DATAONSTOP = 8;
	case ADVFCACHE_NOHANDLER = 16;
	case ADVFCACHE_FORCEBUILTIN = 32;
	case ADVFCACHE_ONSAVE = 64;
}
