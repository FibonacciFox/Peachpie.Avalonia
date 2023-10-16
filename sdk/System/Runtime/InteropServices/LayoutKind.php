<?php
namespace System\Runtime\InteropServices;
/**
 */
enum LayoutKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Sequential = 0;
	case Explicit = 2;
	case Auto = 3;
}
