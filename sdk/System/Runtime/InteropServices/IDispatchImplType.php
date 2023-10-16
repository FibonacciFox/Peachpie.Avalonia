<?php
namespace System\Runtime\InteropServices;
/**
 */
enum IDispatchImplType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case CompatibleImpl = 0;
	case InternalImpl = 1;
	case SystemDefinedImpl = 2;
}
