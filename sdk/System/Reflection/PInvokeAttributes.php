<?php
namespace System\Reflection;
/**
 */
enum PInvokeAttributes implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case NoMangle = 0;
	case CharSetMask = 0;
	case CharSetNotSpec = 0;
	case CharSetAnsi = 1;
	case CharSetUnicode = 2;
	case CharSetAuto = 4;
	case BestFitUseAssem = 6;
	case BestFitEnabled = 6;
	case BestFitDisabled = 16;
	case BestFitMask = 32;
	case ThrowOnUnmappableCharUseAssem = 48;
	case ThrowOnUnmappableCharEnabled = 64;
	case ThrowOnUnmappableCharDisabled = 256;
	case ThrowOnUnmappableCharMask = 512;
	case SupportsLastError = 768;
	case CallConvMask = 1024;
	case CallConvWinapi = 1280;
	case CallConvCdecl = 1792;
	case CallConvStdcall = 4096;
	case CallConvThiscall = 8192;
	case CallConvFastcall = 12288;
	case MaxValue = 65535;
}
