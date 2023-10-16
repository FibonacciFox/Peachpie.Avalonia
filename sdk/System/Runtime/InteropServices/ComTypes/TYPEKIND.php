<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum TYPEKIND implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case TKIND_ENUM = 0;
	case TKIND_RECORD = 1;
	case TKIND_MODULE = 2;
	case TKIND_INTERFACE = 3;
	case TKIND_DISPATCH = 4;
	case TKIND_COCLASS = 5;
	case TKIND_ALIAS = 6;
	case TKIND_UNION = 7;
	case TKIND_MAX = 8;
}
