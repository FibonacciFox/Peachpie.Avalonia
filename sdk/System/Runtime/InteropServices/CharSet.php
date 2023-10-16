<?php
namespace System\Runtime\InteropServices;
/**
 */
enum CharSet implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 1;
	case Ansi = 2;
	case Unicode = 3;
	case Auto = 4;
}
