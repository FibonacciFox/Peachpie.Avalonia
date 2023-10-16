<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum LIBFLAGS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case LIBFLAG_FRESTRICTED = 1;
	case LIBFLAG_FCONTROL = 2;
	case LIBFLAG_FHIDDEN = 4;
	case LIBFLAG_FHASDISKIMAGE = 8;
}
