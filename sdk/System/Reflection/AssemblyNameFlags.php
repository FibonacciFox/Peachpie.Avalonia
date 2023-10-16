<?php
namespace System\Reflection;
/**
 */
enum AssemblyNameFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case None = 0;
	case PublicKey = 1;
	case EnableJITcompileOptimizer = 256;
	case EnableJITcompileTracking = 16384;
	case Retargetable = 32768;
}
