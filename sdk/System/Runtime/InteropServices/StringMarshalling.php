<?php
namespace System\Runtime\InteropServices;
/**
 */
enum StringMarshalling implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Custom = 0;
	case Utf8 = 1;
	case Utf16 = 2;
}
