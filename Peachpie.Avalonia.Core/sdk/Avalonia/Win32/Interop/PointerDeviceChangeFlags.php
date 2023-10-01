<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PointerDeviceChangeFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PDC_ARRIVAL = 1;
	case PDC_REMOVAL = 2;
	case PDC_ORIENTATION_0 = 4;
	case PDC_ORIENTATION_90 = 8;
	case PDC_ORIENTATION_180 = 16;
	case PDC_ORIENTATION_270 = 32;
	case PDC_MODE_DEFAULT = 64;
	case PDC_MODE_CENTERED = 128;
	case PDC_MAPPING_CHANGE = 256;
	case PDC_RESOLUTION = 512;
	case PDC_ORIGIN = 1024;
	case PDC_MODE_ASPECTRATIOPRESERVED = 2048;
}
