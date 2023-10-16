<?php
namespace System\Runtime\InteropServices;
/**
 */
enum ComInterfaceType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case InterfaceIsDual = 0;
	case InterfaceIsIUnknown = 1;
	case InterfaceIsIDispatch = 2;
	case InterfaceIsIInspectable = 3;
}
