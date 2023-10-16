<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
enum PARAMFLAG implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case PARAMFLAG_NONE = 0;
	case PARAMFLAG_FIN = 1;
	case PARAMFLAG_FOUT = 2;
	case PARAMFLAG_FLCID = 4;
	case PARAMFLAG_FRETVAL = 8;
	case PARAMFLAG_FOPT = 16;
	case PARAMFLAG_FHASDEFAULT = 32;
	case PARAMFLAG_FHASCUSTDATA = 64;
}
