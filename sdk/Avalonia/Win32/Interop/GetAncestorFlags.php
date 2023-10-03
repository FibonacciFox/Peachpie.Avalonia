<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum GetAncestorFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GA_PARENT = 1;
	case GA_ROOT = 2;
	case GA_ROOTOWNER = 3;
}
