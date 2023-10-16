<?php
namespace System\Runtime\InteropServices;
/**
 */
enum CustomQueryInterfaceMode implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Ignore = 0;
	case Allow = 1;
}
