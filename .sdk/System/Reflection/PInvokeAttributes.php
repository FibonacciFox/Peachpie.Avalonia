<?php
namespace System\Reflection;
enum PInvokeAttributes
{

	
	case NoMangle = '1';
	case CharSetMask = '6';
	case CharSetNotSpec = '0';
	case CharSetAnsi = '2';
	case CharSetUnicode = '4';
	case CharSetAuto = '6';
	case BestFitUseAssem = '0';
	case BestFitEnabled = '16';
	case BestFitDisabled = '32';
	case BestFitMask = '48';
	case ThrowOnUnmappableCharUseAssem = '0';
	case ThrowOnUnmappableCharEnabled = '4096';
	case ThrowOnUnmappableCharDisabled = '8192';
	case ThrowOnUnmappableCharMask = '12288';
	case SupportsLastError = '64';
	case CallConvMask = '1792';
	case CallConvWinapi = '256';
	case CallConvCdecl = '512';
	case CallConvStdcall = '768';
	case CallConvThiscall = '1024';
	case CallConvFastcall = '1280';
	case MaxValue = '65535';

}