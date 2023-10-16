<?php
namespace System\Configuration\Assemblies;
/**
 */
enum AssemblyHashAlgorithm implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case MD5 = 32771;
	case SHA1 = 32772;
	case SHA256 = 32780;
	case SHA384 = 32781;
	case SHA512 = 32782;
}
