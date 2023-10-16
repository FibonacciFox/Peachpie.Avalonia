<?php
namespace System\Runtime\InteropServices;
/**
 */
enum ComMemberType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Method = 0;
	case PropGet = 1;
	case PropSet = 2;
}
