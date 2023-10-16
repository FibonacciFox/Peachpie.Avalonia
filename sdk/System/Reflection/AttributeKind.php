<?php
namespace System\Reflection;
/**
 */
enum AttributeKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Version = 1;
	case Culture = 2;
	case PublicKeyOrToken = 4;
	case ProcessorArchitecture = 8;
	case Retargetable = 16;
	case ContentType = 32;
}
