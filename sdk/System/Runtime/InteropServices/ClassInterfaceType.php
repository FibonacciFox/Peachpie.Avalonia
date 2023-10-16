<?php
namespace System\Runtime\InteropServices;
/**
 */
enum ClassInterfaceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case AutoDispatch = 1;
	case AutoDual = 2;
}
