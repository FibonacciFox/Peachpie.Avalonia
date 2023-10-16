<?php
namespace System\Runtime\InteropServices;
/**
 */
enum TypeLibTypeFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FAppObject = 1;
	case FCanCreate = 2;
	case FLicensed = 4;
	case FPreDeclId = 8;
	case FHidden = 16;
	case FControl = 32;
	case FDual = 64;
	case FNonExtensible = 128;
	case FOleAutomation = 256;
	case FRestricted = 512;
	case FAggregatable = 1024;
	case FReplaceable = 2048;
	case FDispatchable = 4096;
	case FReverseBind = 8192;
}
