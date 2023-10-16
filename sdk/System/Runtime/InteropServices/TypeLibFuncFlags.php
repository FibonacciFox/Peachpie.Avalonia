<?php
namespace System\Runtime\InteropServices;
/**
 */
enum TypeLibFuncFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FRestricted = 1;
	case FSource = 2;
	case FBindable = 4;
	case FRequestEdit = 8;
	case FDisplayBind = 16;
	case FDefaultBind = 32;
	case FHidden = 64;
	case FUsesGetLastError = 128;
	case FDefaultCollelem = 256;
	case FUiDefault = 512;
	case FNonBrowsable = 1024;
	case FReplaceable = 2048;
	case FImmediateBind = 4096;
}
