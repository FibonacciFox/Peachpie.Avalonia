<?php
namespace System\Runtime\InteropServices;
/**
 */
enum CustomQueryInterfaceResult implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Handled = 0;
	case NotHandled = 1;
	case Failed = 2;
}
