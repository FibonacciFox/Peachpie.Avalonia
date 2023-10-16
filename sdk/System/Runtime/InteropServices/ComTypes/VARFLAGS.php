<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum VARFLAGS implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VARFLAG_FREADONLY = 1;
	case VARFLAG_FSOURCE = 2;
	case VARFLAG_FBINDABLE = 4;
	case VARFLAG_FREQUESTEDIT = 8;
	case VARFLAG_FDISPLAYBIND = 16;
	case VARFLAG_FDEFAULTBIND = 32;
	case VARFLAG_FHIDDEN = 64;
	case VARFLAG_FRESTRICTED = 128;
	case VARFLAG_FDEFAULTCOLLELEM = 256;
	case VARFLAG_FUIDEFAULT = 512;
	case VARFLAG_FNONBROWSABLE = 1024;
	case VARFLAG_FREPLACEABLE = 2048;
	case VARFLAG_FIMMEDIATEBIND = 4096;
}
