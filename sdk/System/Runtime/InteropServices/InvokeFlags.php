<?php
namespace System\Runtime\InteropServices;
/**
 */
enum InvokeFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case DISPATCH_METHOD = 1;
	case DISPATCH_PROPERTYGET = 2;
	case DISPATCH_PROPERTYPUT = 4;
	case DISPATCH_PROPERTYPUTREF = 8;
}
