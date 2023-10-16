<?php
namespace System;
/**
 */
enum TypeNameFormatFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case FormatBasic = 0;
	case FormatNamespace = 1;
	case FormatFullInst = 2;
	case FormatAssembly = 4;
	case FormatSignature = 8;
	case FormatNoVersion = 16;
	case FormatAngleBrackets = 64;
	case FormatStubInfo = 128;
	case FormatGenericParam = 256;
}
