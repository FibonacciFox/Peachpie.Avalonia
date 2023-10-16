<?php
namespace System\Runtime\InteropServices;
/**
 */
enum ExporterEventKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NOTIF_TYPECONVERTED = 0;
	case NOTIF_CONVERTWARNING = 1;
	case ERROR_REFTOINVALIDASSEMBLY = 2;
}
