<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum FUNCKIND implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FUNC_VIRTUAL = 0;
	case FUNC_PUREVIRTUAL = 1;
	case FUNC_NONVIRTUAL = 2;
	case FUNC_STATIC = 3;
	case FUNC_DISPATCH = 4;
}
