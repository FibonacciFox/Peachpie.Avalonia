<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum DESCKIND implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DESCKIND_NONE = 0;
	case DESCKIND_FUNCDESC = 1;
	case DESCKIND_VARDESC = 2;
	case DESCKIND_TYPECOMP = 3;
	case DESCKIND_IMPLICITAPPOBJ = 4;
	case DESCKIND_MAX = 5;
}
