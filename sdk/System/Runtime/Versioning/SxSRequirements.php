<?php
namespace System\Runtime\Versioning;
/**
 */
enum SxSRequirements implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case AppDomainID = 1;
	case ProcessID = 2;
	case CLRInstanceID = 4;
	case AssemblyName = 8;
	case TypeName = 16;
}
