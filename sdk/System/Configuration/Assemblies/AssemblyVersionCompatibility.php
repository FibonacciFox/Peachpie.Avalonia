<?php
namespace System\Configuration\Assemblies;
/**
 */
enum AssemblyVersionCompatibility implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case SameMachine = 1;
	case SameProcess = 2;
	case SameDomain = 3;
}
