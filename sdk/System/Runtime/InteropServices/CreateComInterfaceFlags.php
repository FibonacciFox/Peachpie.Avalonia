<?php
namespace System\Runtime\InteropServices;
/**
 */
enum CreateComInterfaceFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case CallerDefinedIUnknown = 1;
	case TrackerSupport = 2;
}
