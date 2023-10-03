<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum GCS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case GCS_COMPATTR = 1;
	case GCS_COMPCLAUSE = 2;
	case GCS_COMPREADATTR = 4;
	case GCS_COMPREADCLAUSE = 8;
	case GCS_COMPREADSTR = 16;
	case GCS_COMPSTR = 32;
	case GCS_CURSORPOS = 128;
	case GCS_DELTASTART = 256;
	case GCS_RESULTCLAUSE = 512;
	case GCS_RESULTREADCLAUSE = 1024;
	case GCS_RESULTREADSTR = 2048;
	case GCS_RESULTSTR = 4096;
}
